<?php
namespace App\Controllers;
class Home {
   public function index() {
      return view('client.modules.home.index');
   }
}