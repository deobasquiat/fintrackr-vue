<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Account;
use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    /**
     * Index
     *
     */
    public function index()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Count the total accounts for the authenticated user
        $totalAccounts = $user->accounts()->count();

        // Get the user's accounts
        $accounts = $user->accounts;

        // Initialize the overall total amount
        $overallTotal = 0;

        // Iterate over each account and add its total amount to the overall total
        foreach ($accounts as $account) {
            $overallTotal += $account->getTotalAmount();
        }

        // Limit overallTotal to 1 digit after the decimal point
        $overallTotal = number_format($overallTotal, 1, '.', '') + 0;

        return Inertia::render('Dashboard', compact('totalAccounts', 'overallTotal'));
    }
}
