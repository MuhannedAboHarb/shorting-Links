<?php

use App\Http\Controllers\dashboard\CategoriesController;
use App\Http\Controllers\dashboard\ProjectController;
use App\Http\Controllers\ProjectController as ControllersProjectController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index',[CategoriesController::class,'index'])
    ->name('index');


Route::get('/create',[CategoriesController::class,'create'])
    ->name('create');    


Route::post('/',[CategoriesController::class,'store'])
    ->name('store');  
    

Route::get('/{id}/edit', [CategoriesController::class, 'edit'])
    ->name('edit');

Route::put('/{id}', [CategoriesController::class, 'update'])
    ->name('update');

Route::get('/delete/{id}',[CategoriesController::class,'destroy']);
/////////////////////////////////////////////////////////////////////////

Route::get('/project', [ProjectController::class, 'index'])->name('project.index');

Route::get('/project/create', [ProjectController::class, 'create'])->name('project.create');

Route::get('/{new_url}', [ProjectController::class, 'show'])->name('project.show');

Route::post('/project', [ProjectController::class, 'store'])->name('project.store');