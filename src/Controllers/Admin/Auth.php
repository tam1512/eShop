<?php 
namespace App\Controllers\Admin;
class Auth {
   public function login() {
      return view('admin.modules.auth.login');
   }
   public function register() {
      return view('admin.modules.auth.register');
   }
}