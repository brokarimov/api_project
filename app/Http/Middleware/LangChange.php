<?php

namespace App\Http\Middleware;

use App;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class LangChange
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session('lang')) {
            $lang = session('lang');
            if (!in_array($lang, ['en', 'uz', 'ru'])) {
                abort(404);
            }
        } else {
            $lang = 'uz';
        }
        App::setLocale($lang);
        return $next($request);
    }
}
