<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

use App\Http\Controllers\Tenant\DashboardController;
use App\Http\Controllers\Tenant\InstructorsController;

use App\Http\Controllers\Tenant\Settings\MembershipPlansController;

/*
|--------------------------------------------------------------------------
| Tenant Routes
|--------------------------------------------------------------------------
|
| Here you can register the tenant routes for your application.
| These routes are loaded by the TenantRouteServiceProvider.
|
| Feel free to customize them however you want. Good luck!
|
*/

Route::middleware([
    'web',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('tenant.dashboard.index');
        Route::resource('instructors', InstructorsController::class);

        Route::prefix('settings')->group(function () {
            Route::resource('membership-plans', MembershipPlansController::class);
        });

    });

});
