<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use Stancl\Tenancy\Middleware\InitializeTenancyByDomain;
use Stancl\Tenancy\Middleware\CheckTenantForMaintenanceMode;
use Stancl\Tenancy\Middleware\PreventAccessFromCentralDomains;

use App\Http\Controllers\Tenant\Auth\LoginController;

use App\Http\Controllers\Tenant\WelcomeController;

use App\Http\Controllers\Tenant\DashboardController;
use App\Http\Controllers\Tenant\InstructorsController;
use App\Http\Controllers\Tenant\MembersController;

use App\Http\Controllers\Tenant\Api\MembersApiController;

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
    CheckTenantForMaintenanceMode::class,
])->group(function () {

    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'attemptLogin'])->name('login');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');

    Route::get('/', [WelcomeController::class, 'index']);

});

Route::middleware([
    'web',
    'auth',
    InitializeTenancyByDomain::class,
    PreventAccessFromCentralDomains::class,
])->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('tenant.dashboard.index');
        Route::resource('instructors', InstructorsController::class);
        Route::resource('members', MembersController::class);

        Route::prefix('settings')->group(function () {
            Route::resource('membership-plans', MembershipPlansController::class);
        });

    });

    Route::middleware(['api'])->prefix('api')->group(function () {
        Route::delete('members/{id}', [MembersApiController::class, 'destroy']);
    });


});
