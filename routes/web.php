<?php

use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Dashboard\DashboardController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::prefix('admin')->group(function(){

    Route::get('dashbaord',[DashboardController::class,'index'])->name('maindashboard');
    //Routing for Product Section 

    Route::get('section/add',[SectionController::class,'addsection'])->name('add_section');
    Route::get('section/all',[SectionController::class,'index'])->name('all_sections');
    Route::get('section/{section_id}/edit',[SectionController::class,'edit'])->name('edit_sections');
    Route::post('store',[SectionController::class,'store'])->name('store_section');
    Route::put('section/{section_id}',[SectionController::class,'update'])->name('update');
    Route::get('section/delete/{section_id}',[SectionController::class,'destroy'])->name('destroy');
    //Routing for product Brand


});
