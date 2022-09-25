<?php

use App\Http\Livewire\Admin\Dashboard as AdminDashboard;
use App\Http\Livewire\Admin\Login as AdminLogin;
use App\Http\Livewire\Admin\Pact\AddPact;
use App\Http\Livewire\Admin\Register as AdminRegister;
use App\Http\Livewire\Admin\User\AddUser;
use App\Http\Livewire\Admin\Users;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Home;
use App\Http\Livewire\Profile;
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

Route::get('lang/{lang}', ['as' => 'lang.switch', 'uses' => 'App\Http\Controllers\LanguageController@switchLang']);
//Admin--------------
Route::middleware('guest')->prefix('admin')->as('admin.')->group(function () {

    Route::get('/register', AdminRegister::class)->name('register');
    Route::get('/login', AdminLogin::class)->name('login');
});
Route::middleware('auth:webadmin')->prefix('admin')->as('admin.')->group(function () {
    Route::get('logout', function () {
        auth('webadmin')->logout();
        return redirect()->route('admin.login');
    })->name('logout');
    Route::get('/dashboard', AdminDashboard::class)->name('dashboard');
    Route::get('/dashboard/add-user', AddUser::class)->name('user.add');
    Route::get('/dashboard/add-pact', AddPact::class)->name('pact.add');
});
//User---------------


Route::middleware('guest')->as('user.')->group(function () {

    Route::get('/login', Login::class)->name('login');
});

Route::middleware('auth:web')->as('user.')->group(function () {
    Route::get('logout', function () {
        auth()->logout();
        return redirect()->route('user.login');
    })->name('logout');
    Route::get('/profile', Profile::class)->name('profile');
    Route::get('/', Home::class)->name('home');

});
