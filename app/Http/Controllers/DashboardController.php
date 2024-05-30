<?php

namespace App\Http\Controllers;

use App\Models\DonationNominal;
use App\Models\News;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $admin = User::where('level', 'admin')->count();
        $user = User::where('level','user')->count();
        $news = News::count();

        $year = $request->input('year', date('Y')); // Default to the current year if no year is specified
        $monthlyDonations = $this->getMonthlyDonations($year);

        return view('admin-panel.pages.dashboard', compact('admin', 'user', 'news', 'monthlyDonations', 'year'));
    }

    public function getMonthlyDonations($year)
    {
        $donations = DonationNominal::select(
                DB::raw('MONTH(created_at) as month'),
                DB::raw('SUM(amount) as total')
            )
            ->whereYear('created_at', $year)
            ->where('status', 'success')
            ->groupBy(DB::raw('MONTH(created_at)'))
            ->pluck('total', 'month');

        // Ensure all months are represented
        $monthlyDonations = array_fill(1, 12, 0);

        foreach ($donations as $month => $total) {
            $monthlyDonations[$month] = $total;
        }

        return $monthlyDonations;
    }
}
