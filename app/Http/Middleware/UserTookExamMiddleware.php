<?php

namespace App\Http\Middleware;

use Closure;

class UserTookExamMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {

        $checkIfUserTookExam = $request->user()->exams()->count();

        if($checkIfUserTookExam)
        {
            return redirect('/');
        }

        return $next($request);
    }
}
