<?php

namespace App\Http\Middleware;

use App\Models\DonationNominal;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Symfony\Component\HttpFoundation\Response;

class CheckIfDonationAlreadySuccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $param = Crypt::decrypt($request->route('id'));
        $donationStatus = DonationNominal::find($param);

        if($donationStatus->status != 'pending' || $donationStatus->image != null) {
            return redirect()->route('web.home')->with('warning', 'Sesi sudah selesai, silahkan melakukan donasi lagi');
        }
        return $next($request);
    }
}
