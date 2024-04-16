<?php

namespace App\Http\Middleware;

use Closure;
use App\Models\Member;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MemberRegisteredAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user_id = auth()->user()->id;
        $name = auth()->user()->name;
        if (Member::where('user_id',$user_id)->exists()) {
            return redirect(route('registered.members'))->with('success',$name.' you are already a registered member!');
        }
        return $next($request);
    }
}
