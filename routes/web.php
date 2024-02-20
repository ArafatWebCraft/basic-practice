<?php

use Illuminate\Support\Facades\Route;

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
use App\Http\Controllers\StudentController;
Route::get('/', function () {
    return view('talwind');
});


//protected
Route::get('/profile',function(){
    return 'This is My profile';
})->middleware('guerd');

Route::get('/country',function(){
    return 'This is My country';
})->middleware('guerd');

Route::get('/login',function(){
    session()->put('user_id',1);
    return redirect('/');
});
Route::get('/logout',function(){
    session()->forget('user_id',1);
    return redirect()->back();
});
Route::get('/index-page',function(){
    return view('index');
});
Route::get('/no-access',function(){
    return 'You are not allow to accesss';
    die;
});

// Route::group(['prefix'=>'student'],function (){
//     Route::get('/home-page',[StudentController::class,'index'])->name('home.page');
//     Route::post('/create-student',[StudentController::class,'create_student'])->name('create.student');
// });