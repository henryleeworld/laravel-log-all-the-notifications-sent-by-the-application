<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $sentNotifications = Auth::user()->notificationLogItems()->get();
        return view('dashboard', [
            'sentNotifications' => $sentNotifications,
        ]);
    }
}
