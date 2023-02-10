<?php

namespace App\Http\Middleware;

use App\Models\Permission;
use App\Models\User;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

class HasPermission
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check()) {

            $user = Auth::user();

            // $permissions = RoleHasPermission::where('role_id',$user->role_id)->with('permissions')->get();
            // print_r($permissions);
            $permission_names = Permission::with('permission', function ($query) use ($user) {
                // $query->where('role_id',$user->role_id);

            })->get();
            print_r($permission_names);die;
            $controllerAction = class_basename(Route::currentRouteAction());
            $check = '';

            $os = array("Apple", "Banana", "Lemon");
            if (in_array("Apple", $os)) {
                foreach ($permissions as $permission) {
                    if ($permission->permissions->name == $controllerAction) {
                        $check = true;
                    }
                }

                if ($check) {
                    return $next($request);
                } else {
                    return abort(403);
                }

            } else {
                return route('login');
            }

        }
    }
}
