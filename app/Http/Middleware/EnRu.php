<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class EnRu
{
    private const DEFAULT_LOCALE='ru';
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //$locale=$request->input('id_address_eas');
        $locale=$request->route()->parameter('locale');
        $this->locale($locale);
        $request->route()->forgetParameter('locale');
        return $next($request);
    }
    private function locale(string $locale){
        if(!in_array($locale,['en','ru'])){
            abort(403);
            //App::setLocale(self::DEFAULT_LOCALE);
        }
        App::setLocale($locale);
    }
}
