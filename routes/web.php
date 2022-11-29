<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Requests\CategoryFormRequest;
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
    //Routing for active and inactive product section 
    Route::get('active/section/{section_id}',[SectionController::class,'active'])->name('active_section');
    Route::get('inactive/section/{section_id}',[SectionController::class,'inactive'])->name('inactive_section');

    //Routing for product Categories
    Route::get('categories',[CategoriesController::class,'index'])->name('categories');
    Route::get('categories/add',[CategoriesController::class,'create'])->name('add_categories');  
    Route::post('categories/store',[CategoriesController::class,'store'])->name('store_categories');

    //routing for groups
    Route::get('groups',[GroupController::class,'index'])->name('groups');
    Route::get('groups/{group_id}/edit',[GroupController::class,'edit'])->name('edit_group');
    Route::get('groups/delete/{group_id}',[GroupController::class,'destory'])->name('group_destory');
    Route::get('groups/add',[GroupController::class,'create'])->name('add_group');
    Route::post('groups/store',[GroupController::class,'store'])->name('store_group');
    Route::put('group/{group_id}/update',[GroupController::class,'update'])->name('update_group');
});
