<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

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

//admin dashboard
Route::get('/',  [AdminController::class, 'dashboard'])->name('home');

//admin profile
Route::get('/profile/setting',[AdminController::class,'profile_setting'])->name('profile.setting');
Route::get('/profile/setting/recovery-codes', [AdminController::class, 'recoveryCodeShow']);
Route::get('/profile/edit',[AdminController::class, 'profile_edit'])->name('profile.edit');
Route::put('/profile-image', [AdminController::class, 'image_update'])->name('profile-image.update');
Route::get('/two-factor-recover',  [AdminController::class, 'two_factor_recover']);

//application setting
Route::resource('setting', SettingController::class,array('except'=>['create','show']));
Route::post('setting/change/logo', [SettingController::class,'change_logo'])->name('setting.logo.change');
Route::post('setting/change/icon', [SettingController::class,'change_icon'])->name('setting.icon.change');
Route::post('setting/change/about_us_image', [SettingController::class,'change_about_us_image'])->name('setting.about_us_image.change');

// crud resource
Route::resource('brand', BrandController::class,array('except'=>['show']));
Route::resource('gallery', GalleryController::class,array('except'=>['show']));
Route::resource('client', ClientController::class,array('except'=>['show']));
Route::resource('about-us', AboutController::class,array('only'=>['index','update']));
