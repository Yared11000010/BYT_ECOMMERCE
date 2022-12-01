<?php

use App\Http\Controllers\Admin\CategoriesController;
use App\Http\Controllers\Admin\GroupController;
use App\Http\Controllers\Admin\SectionController;
use App\Http\Controllers\Admin\SubCategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Requests\CategoryFormRequest;
use App\Models\SubCategory;
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
    Route::get('categories/{categoires_id}/edit',[CategoriesController::class,'edit'])->name('edit_categories');
    Route::get('categories/{categoires_id}/delete',[CategoriesController::class,'destory'])->name('delete_categories');
    Route::put('categories/update',[CategoriesController::class,'update'])->name('upate_categories');

    Route::get('active/category/{categories_id}',[CategoriesController::class,'active'])->name('active_category');
    Route::get('inactive/category/{categories_id}',[CategoriesController::class,'inactive'])->name('inactive_category');
    
    //Routing for Sub_category

    Route::get('subcategories',[SubCategoryController::class,'index'])->name('sub_categories');
    Route::get('subcategories/create',[SubCategoryController::class,'create'])->name('create_subcategory');
    Route::post('subcategories/store',[SubCategoryController::class,'store'])->name('store_subcategory');
    Route::get('subcategories/{subcategory_id}',[SubCategoryController::class,'destory'])->name('delete_subcategory');
    Route::get('subcategories/{subcategory_id}/edit',[SubCategoryController::class,'edit'])->name('edit_subcategory');
    Route::put('subcategories/update',[SubCategoryController::class,'update'])->name('update_subcategory');

    Route::get('active/subcategory/{subcategory_id}',[SubCategoryController::class,'active'])->name('active_subcategory');
    Route::get('inactive/subcategory/{subcategory_id}',[SubCategoryController::class,'inactive'])->name('inactive_subcategory');

    //routing for groups
    Route::get('groups',[GroupController::class,'index'])->name('groups');
    Route::get('groups/{group_id}/edit',[GroupController::class,'edit'])->name('edit_group');
    Route::get('groups/delete/{group_id}',[GroupController::class,'destory'])->name('group_destory');
    Route::get('groups/add',[GroupController::class,'create'])->name('add_group');
    Route::post('groups/store',[GroupController::class,'store'])->name('store_group');
    Route::put('group/{group_id}/update',[GroupController::class,'update'])->name('update_group');
});
