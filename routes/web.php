<?php

use App\Http\Controllers\GeneralSettingController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DisplayEditorController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SlidesController;
use App\Http\Controllers\SocialMediaController;
use App\Http\Controllers\UserController;
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

Route::middleware(['auth','verified','check:admin'])->prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('slide',SlidesController::class);

    Route::get('/general',[GeneralSettingController::class,'create'])->name('general.create');
    Route::post('/general',[GeneralSettingController::class,'store'])->name('general.store');
    Route::post('/general/update',[GeneralSettingController::class,'update'])->name('general.update');

    Route::get('/social-media',[SocialMediaController::class,'create'])->name('social.create');
    Route::post('/social-media',[SocialMediaController::class,'store'])->name('social.store');
    Route::post('/social-media/update',[SocialMediaController::class,'update'])->name('social.update');

    Route::get('/users' ,[UserController::class,'index'])->name('users.index');
    Route::post('/users-type/{id}' ,[UserController::class,'changeType'])->name('user.change_type');

    Route::post('element', [DisplayEditorController::class,'store'])->name('element.store');
    Route::get('element', [DisplayEditorController::class,'index'])->name('element.index');
    Route::post('element/update/{id}', [DisplayEditorController::class,'update'])->name('element.update');


    Route::post('element/sectionone', [DisplayEditorController::class,'storeSectionOne'])->name('element.storeSectionOne');
    Route::get('sectionone', [DisplayEditorController::class,'indexSectionOne'])->name('element.indexSectionOne');
    Route::post('element/sectionone/update', [DisplayEditorController::class,'updateSectionOne'])->name('element.updateSectionOne');

    Route::post('element/sectiontwo', [DisplayEditorController::class,'storeSectionTwo'])->name('element.storeSectionTwo');
    Route::get('element/sectiontwo', [DisplayEditorController::class,'indexSectionTwo'])->name('element.indexSectionTwo');
    Route::post('element/sectiontwo/update', [DisplayEditorController::class,'updateSectionTwo'])->name('element.updateSectionTwo');

    Route::resource('game',GameController::class)->except('show');
    Route::post('game/change-state/{id}',[GameController::class,'changeState'])->name('game.change_state');
    Route::resource('news',\App\Http\Controllers\NewsController::class)->except('show');

});

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/show-match/{id}',[GameController::class,'show'])->name('game.show');
Route::get('/news/{id}',[NewsController::class,'show'])->name('news.show');
Route::get('/contact-us',[HomeController::class,'contactUs'])->name('contact.us');
Route::get('/privacy-policy',[HomeController::class,'privacyPolicy'])->name('privacy.policy');
Route::get('/dmca',[HomeController::class,'dmca'])->name('dmca');

Auth::routes();


