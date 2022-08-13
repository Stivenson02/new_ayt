<?php

namespace App\Http\Middleware;

use App\Models\People\Stakeholder;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterCompany
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
        $user = Auth::user();
        if ($user->processes->count() == 0){
            $stakeholder=Stakeholder::where('phone', $user->phone);
            if($stakeholder->count() > 0){
                return redirect('register/collaborator_welcome');
            }
            return redirect('register/company');
        }
        if ($user->processes->where("process", "register")->where("status", "==","complete")->count() == 0){
            return redirect()->route('show_register_continue');
        }
        return $next($request);
    }
}
