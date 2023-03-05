<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    /**
     * @return \Illuminate\View\View
     */
    public function index(): View
    {
        $sentNotifications = Auth::user()->notificationLogItems()->get();
        return view('dashboard', [
            'sentNotifications' => $sentNotifications,
        ]);
    }
}
