<?php

namespace App\Http\Controllers\Tenant;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('tenant.welcome');
    }
}
