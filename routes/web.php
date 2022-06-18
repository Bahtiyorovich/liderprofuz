<?php

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

Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], 
    function(){ 
        Route::get('/', function () {
            return view('index');
        })->name('index');

        //Frontend 

        Route::get('/CONCEPTUAL AND SKETCH PROJECTS', [App\Http\Controllers\IndexController::class, 'usloviya1'])->name('conceptual');
        Route::get('/DESIGN WORK (INTERIOR AND EXTERIOR SOLUTIONS)', [App\Http\Controllers\IndexController::class, 'usloviya2'])->name('design_work');
        Route::get('/LANDSCAPE DESIGN', [App\Http\Controllers\IndexController::class, 'usloviya3'])->name('landscape_design');
        Route::get('/TECHNICAL AND INSTRUMENTAL RESEARCH', [App\Http\Controllers\IndexController::class, 'usloviya4'])->name('technical');
        Route::get('/Designing', [App\Http\Controllers\IndexController::class, 'usloviya5'])->name('designing');
        Route::get('/DESIGN OF MAIN ENGINEERING NETWORKS', [App\Http\Controllers\IndexController::class, 'usloviya6'])->name('design_of_main');
        Route::get('/SUPPORT OF PROCUREMENT ACTIVITIES', [App\Http\Controllers\IndexController::class, 'usloviya7'])->name('support');
        Route::get('/LIBRARY', [App\Http\Controllers\IndexController::class, 'library'])->name('library');
        Route::get('/COMPANY', [App\Http\Controllers\IndexController::class, 'company'])->name('company');
        Route::get('/COMPANY LARGE', [App\Http\Controllers\IndexController::class, 'large'])->name('large');
        Route::get('/Licenses', [App\Http\Controllers\IndexController::class, 'litsenziya'])->name('litsenziya');
        Route::get('/OUR TEAM', [App\Http\Controllers\IndexController::class, 'ourteam'])->name('ourteam');
        Route::get('/JOB OPENINGS', [App\Http\Controllers\IndexController::class, 'vakansiya'])->name('vakansiya');
        Route::get('/Справочник', [App\Http\Controllers\IndexController::class, 'spravichnik'])->name('spravichnik');
        Route::get('/Portfolio', [App\Http\Controllers\IndexController::class, 'portfolio'])->name('portfolio');
        Route::get('/Sector', [App\Http\Controllers\IndexController::class, 'sector'])->name('sector');
        Route::get('/Project', [App\Http\Controllers\IndexController::class, 'project'])->name('project');
        Route::get('/Contact', [App\Http\Controllers\IndexController::class, 'contact'])->name('contact');
    }
);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
