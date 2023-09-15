<?php

namespace App\Http\Middleware;

use App\Models\SiteSetting;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;




class PanelSettingMiddleware
{

    public function handle(Request $request, Closure $next): Response
    {
        $settings=SiteSetting::pluck("data","name")- $this->toArray();

        view()->share(["sitesetting"=>$settings]);

        return $next($request);
    }
}
