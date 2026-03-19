<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SSLPaymentController;
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

Route::get('/', [FrontendController::class, 'home'])->name('frontend.home');
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('frontend.about');
Route::get('/certification', [FrontendController::class, 'certification'])->name('frontend.certification');
Route::get('/service', [FrontendController::class, 'service'])->name('frontend.service');
Route::get('/contact', [FrontendController::class, 'contactUs'])->name('frontend.contact');
Route::get('/news', [FrontendController::class, 'allNews'])->name('frontend.allNews');
Route::get('/our-projects', [FrontendController::class, 'OurProjects'])->name('frontend.ourProject');
Route::get('/project/{slug}', [FrontendController::class, 'projectDetail'])->name('frontend.project.detail');
Route::get('/news/details/{slug}', [FrontendController::class, 'singleNews'])->name('frontend.singleNews');
Route::get('/news/{type}', [FrontendController::class, 'news'])->name('frontend.news');
Route::get('/news/{type}/{slug}', [FrontendController::class, 'newsDetail'])->name('frontend.news.detail');
Route::get('/product-center', [FrontendController::class, 'productCenter'])->name('frontend.product.center');
Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('frontend.privacy.policy');
Route::get('/products/{slug}', [FrontendController::class, 'categoryProduct'])->name('frontend.products');
Route::get('/product/{slug}', [FrontendController::class, 'productDetail'])->name('frontend.product.detail');
Route::post('search', [FrontendController::class, 'search'])->name('frontend.search');
Route::get('cart', [FrontendController::class, 'cart'])->name('frontend.cart');
Route::get('checkout', [FrontendController::class, 'checkout'])->name('frontend.checkout');
Route::get('order-complete/{order_no}', [FrontendController::class, 'completeOrder'])->name('frontend.order.complete');
Route::post('order-process/sslcommerz/success',[SSLPaymentController::class,'success']);
Route::post('order-process/sslcommerz/fail',[SSLPaymentController::class,'fail']);
Route::post('order-process/sslcommerz/cancel',[SSLPaymentController::class,'cancel']);

Route::get('/inquire', [FrontendController::class, 'inquire'])->name('frontend.inquire');
Route::get('/inquire/success', [FrontendController::class, 'inquireSuccess'])->name('frontend.inquire.success');
//Route::get('user', [FrontendController::class, 'myAccount'])->name('frontend.user');
//Route::get('login', [FrontendController::class, 'login'])->name('frontend.login');
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    return "Cache and views cleared!";
});
