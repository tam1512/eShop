<?php
namespace App\Controllers\Admin;
use Symfony\Component\HttpKernel\Profiler\Profile;
use System\Core\Auth;
class User {
   private $rootView = null;
   private $breadcrumb = null;

   public function __construct() {
      $this->rootView = 'admin.modules.user';
      $this->breadcrumb = [
         'Home' => _WEB_HOST_ROOT.'/admin'
      ];
   }
   public function profile() {
      $user = Auth::getUser();
      $pageTitle = 'Profile';
      $breadcrumb = $this->breadcrumb;
      return view($this->rootView.'.profile', compact('pageTitle', 'user', 'breadcrumb'));
   }
}