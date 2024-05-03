<?php 
namespace App\Controllers\Admin;
use App\Models\Admin\RefreshToken;
use App\Models\Admin\User;
use Firebase\JWT\JWT;
use Rakit\Validation\Validator;
use System\Core\Auth;
class Dashboard {
   private $rootView = null;
   private $breadcrumb = null;

   public function __construct() {
      $this->rootView = 'admin.modules.dashboard';
      $this->breadcrumb = [
         'Home' => _WEB_HOST_ROOT.'/admin'
      ];
   }
   public function index() {
      $pageTitle = 'Dashboard';
      $user = Auth::getUser();
      $breadcrumb = $this->breadcrumb;
      return view($this->rootView.'.index', compact('pageTitle', 'user', 'breadcrumb'));
   }
}