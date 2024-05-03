<?php
namespace App\Middlewares\Admin;
use App\Models\Admin\LoginToken;
use App\Models\User;
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;
use System\Core\Auth;
class Authentication implements IMiddleware {
   public function handle(Request $request): void {
      $accessToken = $_COOKIE['access_token'] ?? null;
      if($accessToken) {
         try {
            $decoded = JWT::decode($accessToken, new Key($_ENV['JWT_SECRET_ADMIN'], 'HS256'));
            $userId = $decoded->sub;

            //Đăng nhập trên 1 thiết bị
            $loginTokenModel = new LoginToken();
            $loginToken = $loginTokenModel->find($userId);
            
            $token = $loginToken['token'];

            if($accessToken == $token) {
               $userModel = new \App\Models\Admin\User();
               $user = $userModel->getUser($userId);
               Auth::setUser($user);
               if(preg_match('~/admin/auth/login~', trim($_SERVER['PATH_INFO']))) {
                  redirect(_WEB_HOST_ROOT.'/admin');
               }
            } else {
               setCookie('access_token', '', time()-10, _WEB_HOST_ROOT.'/admin');
               if(trim($_SERVER['PATH_INFO']) != '/admin/auth/login') {
                  redirect(_WEB_HOST_ROOT.'/admin/auth/login');
               }
            }
         } catch(\Exception $e) {
            if(trim($_SERVER['PATH_INFO']) != '/admin/auth/login') {
               redirect(_WEB_HOST_ROOT.'/admin/auth/login');
            }
         }
      } else { 
         if(trim($_SERVER['PATH_INFO']) != '/admin/auth/login') {
            redirect(_WEB_HOST_ROOT.'/admin/auth/login');
         }
      }
   }
}