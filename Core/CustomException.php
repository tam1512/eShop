<?php
namespace System\Core;
class CustomException {
   public function __construct() {
      set_exception_handler([$this, 'getException']);
   }

   public function getException($exception) {
      $code = $exception->getCode();
      switch ($code) {
         case '404':
            $this->loadView($code, $exception);
            break;
         
         default:
            $this->loadView('error', $exception);
            break;
      }
   }

   private function loadView($code = '404', $exception = []) {
      echo view('admin.modules.errors.'.$code, ['exception' => $exception]);
   }
}