<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\RoomController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return redirect() -> route('login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('/dashboard', function () {
        /** @var \App\Models\User $user */ 
        $user = Auth::user();


        //to direct admin to its dashboard
        if($user -> hasRole('admin'))
        {

            return view('dashboard.admin');
        }
        
        //redirect teacher to the dashboard
        if($user -> hasRole('teacher'))
        {
            
            return view('dashboard.teacher');
        }

        //redirect student to the student
        if($user -> hasRole('student'))
        {
            return view('dashboard.student');
        }
        
    })->name('dashboard');
});




/* ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~

                                ADMIN MANAGEMENT ROUTES

--------------------------------------------------------------------------------------------------------------
*/


route::get('/logout',function()
{
    Auth::logout();
    return redirect('/login');

})->name('logout');
