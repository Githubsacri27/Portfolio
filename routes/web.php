<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\Backend\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\WorksController;
use App\Http\Controllers\Backend\SociaLIconController;
use App\Http\Controllers\Backend\MyAccountController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'about']);

Route::get('contact', [HomeController::class, 'contact']);

//Route::post('contact/post', [HomeController::class, 'contact_post']);
Route::post('contact/post', [HomeController::class, 'contact_post']);


Route::get('/works', [HomeController::class, 'works']);
Route::get('works-post/{id}', [HomeController::class, 'works_post']);

// Admin Route group 

Route::group(['middleware' => 'admin'], function () {

// Login admin dashboard
Route::get('admin/dashboard', [DashboardController::class, 'dashboard']);
// Home admin dashboard
Route::get('admin/home', [DashboardController::class, 'admin_home']);

Route::post('admin/home/post', [DashboardController::class, 'admin_home_post']);
// About admin dashboard
Route::get('admin/about', [DashboardController::class, 'admin_about']);

// About post
Route::post('admin/about/post',[DashboardController::class, 'admin_about_post']);


// Contact admin dashboard
Route::get('admin/contact', [DashboardController::class, 'admin_contact']);

// Contact get delete by id
Route::get('admin/contact/delete/{id}', [DashboardController::class, 'admin_contact_delete']);

// Blog admin dashboard
Route::get('admin/works', [DashboardController::class, 'admin_works']);

Route::get('admin/works/add', [WorksController::class, 'admin_works_add']);

Route::post('admin/works/add', [WorksController::class, 'admin_works_add_post']);

Route::get('admin/works/edit/{id}', [WorksController::class, 'admin_works_edit']);

Route::post('admin/works/edit/{id}', [WorksController::class, 'admin_works_edit_update']);

Route::get('admin/works/delete/{id}', [WorksController::class, 'admin_works_delete']);

// Social Icon admin Controller

Route::get('admin/social_icon', [SociaLIconController::class, 'admin_social_icon']);

Route::post('admin/social_icon/update/{id}', [SociaLIconController::class, 'admin_social_icon_update']);

// My account admin dashboard

Route::get('admin/my_account', [MyAccountController::class, 'my_account']);

Route::post('admin/my_account/update', [MyAccountController::class, 'my_account_update']);




});


//Login Route
Route::get('login', [AuthController::class, 'login']);
//Login Admin Route
Route::post('login_admin', [AuthController::class, 'login_admin']);
//Forgot Password Route
Route::get('forgot', [AuthController::class, 'forgot']);
//Logout Route
Route::get('logout', [AuthController::class, 'logout']);
//Forgot Admin Password Route
Route::post('forgot_admin', [AuthController::class, 'forgot_admin']);

