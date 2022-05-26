<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontrol;
use App\Http\Controllers\admincontrol;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//User
Route::get('/', [usercontrol::class, 'home_page']);
Route::get('/shop', [usercontrol::class, 'shop_page']);
Route::get('/about', [usercontrol::class, 'about_page']);
Route::get('/blog', [usercontrol::class, 'blog_page']);
Route::get('/faq', [usercontrol::class, 'faq_page']);

//Admin
Route::prefix('admin')->group(function () {

    Route::get('/login',                    [admincontrol::class, 'ScreenAdminLogin'])                  ->name('screen_admin_login');
    Route::post('/login',                   [admincontrol::class, 'AdminLogin'])                        ->name('admin_login');

    Route::get('/forgot-password',          [admincontrol::class, 'screen_admin_forgot_password'])      ->name('screen_admin_forgot_password');
    Route::post('/forgot-password',         [admincontrol::class, 'admin_forgot_password'])             ->name('admin_forgot_password');

    Route::get('/reset-password',           [admincontrol::class, 'screen_admin_update_password'])      ->name('screen_admin_reset_password');;
    Route::get('/update-password',          [admincontrol::class, 'admin_update_password'])             ->name('admin_update_password');

    // Admin Authenticate
    Route::group(['middleware' => 'auth:sanctum'], function () {
        Route::get('/dashboard',                            [admincontrol::class, 'dashboard'])                      ->name('screen_admin_home');
        Route::get('/logout',                               [admincontrol::class, 'logoutAdmin'])                     ->name('admin_logout');

        //Admin invoice import
        Route::get('invoice-import/pay/{invoice_import}',   [InvoiceImportController::class, 'pay'])                    ->name('admin.invoice_import.pay');
        Route::resource('invoice-import',                   InvoiceImportController::class,                             ['names' => 'admin.invoice_import']);

        //Admin invoice export
        Route::get('order',                                 [InvoiceExportController::class, 'orders'])                 ->name('admin.invoice_export.order');
        Route::get('order/{id}',                            [InvoiceExportController::class, 'order'])                  ->name('admin.invoice_export.order_view');
        Route::get('accept-order/{id}',                     [InvoiceExportController::class, 'acceptOrder'])            ->name('admin.invoice_export.accept_order');
        Route::get('cancel-order/{id}',                     [InvoiceExportController::class, 'cancelOrder'])            ->name('admin.invoice_export.cancel_order');
        Route::get('invoice',                               [InvoiceExportController::class, 'invoices'])               ->name('admin.invoice_export.invoice');
        Route::get('invoice{id}',                           [InvoiceExportController::class, 'invoice'])                ->name('admin.invoice_export.invoice_view');
        Route::get('up-status-ship/{id}',                   [InvoiceExportController::class, 'upStatusShip'])           ->name('admin.invoice_export.up_status_ship');
        Route::get('close-order',                           [InvoiceExportController::class, 'closeOrders'])            ->name('admin.invoice_export.close_orders');
        Route::get('close-order/{id}',                      [InvoiceExportController::class, 'closeOrder'])             ->name('admin.invoice_export.close_order');

        //Admin statistical
        Route::get('statistical-products',                  [StatisticalController::class, 'statisticalProduct'])       ->name('admin.statistical.products');
        Route::get('statistical-invoices',                  [StatisticalController::class, 'statisticalInvoice'])       ->name('admin.statistical.invoices');
        Route::get('statistical-users',                     [StatisticalController::class, 'statisticalUser'])          ->name('admin.statistical.users');
        
        //Admin product
        Route::resource('brand',                            BrandController::class,                                     ['names' => 'admin.brand']);
        Route::resource('category',                         CategoryController::class,                                  ['names' => 'admin.category']);
        Route::resource('product',                          ProductController::class,                                   ['names' => 'admin.product']);

        //Admin account
        Route::resource('account',                          AdminController::class,                                     ['names' => 'admin.account']);
    });
});
