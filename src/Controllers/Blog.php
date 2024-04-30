<?php
namespace App\Controllers;
class Blog {
   public function index() {
      return view('client.modules.blog.index');
   }
   public function detail($id) {
      return view('client.modules.blog.detail');
   }
}