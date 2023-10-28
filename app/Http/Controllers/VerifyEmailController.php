<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Laravel\Fortify\Contracts\VerifyEmailResponse;

class VerifyEmailController extends Controller
{
    public function verify(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return app(VerifyEmailResponse::class);
        }

        if ($request->user()->email_verification_code !== (int)$request->get('code')) {
            return back()->withErrors(['status' => 'error']);
        }

        if ($request->user()->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }

        return redirect()->route('dashboard');
    }

    public function skip(Request $request)
    {
        if ($request->user()->hasVerifiedEmail()) {
            return app(VerifyEmailResponse::class);
        }

        $request->user()->update(['email_verification_skipped_at' => \now()]);


        return redirect()->route('dashboard');
    }
}
