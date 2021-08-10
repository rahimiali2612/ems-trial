<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function dashboardHome()
    {
        return view('/dashboard/home');
    }

    public function dashboardHr()
    {
        $pageConfigs = ['navbarLarge' => false];

        return view('/dashboard/hr', ['pageConfigs' => $pageConfigs]);
    }
    
    public function dashboardModern()
    {
        return view('/pages/dashboard-modern');
    }

    public function dashboardEcommerce()
    {
        // navbar large
        $pageConfigs = ['navbarLarge' => false];

        return view('/pages/dashboard-ecommerce', ['pageConfigs' => $pageConfigs]);
    }

    public function dashboardAnalytics()
    {
        // navbar large
        $pageConfigs = ['navbarLarge' => false];

        return view('/pages/dashboard-analytics', ['pageConfigs' => $pageConfigs]);
    }
}
