<?php

namespace App\Http\Middleware;

use App\Enums\UserRoles;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdministratorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {

        if (auth()->check()) {
            $user = User::with("role")->find(auth()->user()->id);

            if ($user->role->name == UserRoles::ADMINISTRATOR->value) {

                return $next($request);
            }
        }

        return redirect("login");
    }
}
