<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Auth\Middleware\EnsureEmailIsVerified;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class EnsureEmailIVerifiedOrSkipped extends EnsureEmailIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param string|null $redirectToRoute
     * @return mixed
     */
    public function handle($request, Closure $next, $redirectToRoute = null): mixed
    {
        if ($request->user() && $request->user()->hasSkippedEmailVerification()) {
            return $next($request);
        }

        return parent::handle($request, $next, $redirectToRoute);
    }
}
