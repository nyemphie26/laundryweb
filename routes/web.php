<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/contact', function () {
    $titleImg = 'assets/images/1.jpg';
    return view('Pages.contact', compact('titleImg'));
});
Route::get('/about', function () {
    $titleImg = 'assets/images/1.jpg';
    return view('Pages.about', compact('titleImg'));
});

Route::get('/privacy-policy', function () {
    $titleImg = 'assets/images/1.jpg';
    return view('Pages.privacy', compact('titleImg'));
});
Route::get('/data-deletion', function () {
    $titleImg = 'assets/images/1.jpg';
    return view('Pages.deletion', compact('titleImg'));
});
// Route::get('/term-condition', function () {
//     $titleImg = 'assets/images/1.jpg';
//     return view('Pages.term', compact('titleImg'));
// });

Route::get('/service/{slug}', [App\Http\Controllers\ServicePage::class, 'index']);

Route::get('migrate',function(){
    Artisan::call('migrate', ['--force' => true]);
});

Route::get('/rollback',function(){
    Artisan::call('migrate:rollback', ['--force' => true]);
 });

 Route::get('/reboot',function(){
    Artisan::call('view:clear', ['--force' => true]);
    Artisan::call('route:clear', ['--force' => true]);
    Artisan::call('config:clear', ['--force' => true]);
    Artisan::call('cache:clear', ['--force' => true]);
    Artisan::call('key:generate', ['--force' => true]);
  });

  Route::get('/seed', function(){
    Artisan::call('db:seed', array('--class' => 'PermissionsAssign', '--force' => true));
  });
