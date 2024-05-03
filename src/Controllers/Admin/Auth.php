<?php 
namespace App\Controllers\Admin;
use App\Models\Admin\LoginToken;
use App\Models\Admin\User;
use Firebase\JWT\JWT;
use Rakit\Validation\Validator;
class Auth {
   private static $userModel;
   public function __construct() {
      self::$userModel = new User();
   }
   public function login() {
      $pageTitle = 'Admin Login';
      $errors = flash('errors');
      $old = flash('old');
      return view('admin.modules.auth.login', compact('pageTitle', 'errors', 'old'));
   }
   public function handleLogin() {
      $email = input('email'); 
      $password = input('password'); 
      $validator = new Validator;
      $validator->setMessages([
         'required' => ':attribute bắt buộc phải nhập.',
         'email:email' => ':attribute không hợp lệ.'
      ]);

      $rules = [
         'email' => [
            'required', 
            'email',
            function($email) {
               $check = self::$userModel->checkExist('email', $email); 
               if(!$check) {
                  return ':attribute không tồn tại tồn tại.';
               }
               return true;
            }
         ],
         'password' => [
            'required',
            function() use($password, $email) {
               $check = self::$userModel->checkExist('email', $email);
               if($check) {
                  $user = self::$userModel->getUser($email, 'email');
                  $checkPass = password_verify($password, $user['password']);
                  if(!$checkPass) {
                     return ':attribute sai.';
                  }
               }
            }
         ]
      ];

      $validation = $validator->make(input()->all(), $rules);
      $validation->setAliases([
         'email' => 'Email',
         'password' => 'Mật khẩu'
      ]);
      $validation->validate();

      if($validation->fails()) {
         $errors = $validation->errors()->firstOfAll();
         flash('errors', $errors);
         flash('old', ['email' => $email]);
         redirect(_WEB_HOST_ROOT.'/admin/auth/login');
      } else {
         $user = self::$userModel->getUser($email, 'email');
         $payload = [
            'sub' => $user['id'],
            'iat' => time(),
            'exp' => time() + $_ENV['JWT_EXP_ADMIN']
        ];
        $accessToken = JWT::encode($payload, $_ENV['JWT_SECRET_ADMIN'], 'HS256');

        $loginTokenData = [
         'admin_id' =>  $user['id'],
         'token' => $accessToken
        ];
        $loginTokenModel = new LoginToken();
        if($loginTokenModel->find($user['id'])) {
           $loginTokenModel->modify($loginTokenData, $user['id']);
         } else {
            $loginTokenModel->create($loginTokenData);
         }
        setCookie('access_token', $accessToken, time() + ($_ENV['JWT_EXP_ADMIN'] * 2), '/admin');
        redirect(_WEB_HOST_ROOT.'/admin');
      }
   }
}