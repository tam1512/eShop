<?php
namespace App\Middlewares\Admin;
use App\Models\User;
use Pecee\Http\Middleware\IMiddleware;
use Pecee\Http\Request;
use System\Core\Auth;
class Authorization implements IMiddleware {
   public function handle(Request $request): void {
   }
}