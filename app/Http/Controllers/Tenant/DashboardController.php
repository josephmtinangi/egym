<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = new \stdClass();

        return view('tenant.dashboard.index', compact('stats'));
    }
}
