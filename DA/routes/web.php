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
Route::get('/'                      ,[usercontrol::class        , 'home_page']);
Route::get('/shop'                  ,[usercontrol::class        , 'shop_page']);
Route::get('/about'                 ,[usercontrol::class        , 'about_page']);
Route::get('/blog'                  ,[usercontrol::class        , 'blog_page']);
Route::get('/faq'                   ,[usercontrol::class        , 'faq_page']);
Route::get('/contact'               ,[usercontrol::class        , 'contact_page']);

//Admin
Route::get('/admin'                 ,[admincontrol::class       , 'login_admin']);
Route::get('/forgot-password'       ,[admincontrol::class       , 'forgot_admin']);
Route::get('/dashboard'             ,[admincontrol::class       , 'dashboard']);

