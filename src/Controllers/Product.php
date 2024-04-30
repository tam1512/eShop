<?php
namespace App\Controllers;
class Product {
   public function index() {
      return view('client.modules.product.index');
   }
   public function detail($id) {
      return view('client.modules.product.detail');
   }
}