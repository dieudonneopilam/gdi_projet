<?php

use App\Http\Controllers\Annuaire;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ControlRoute;
use Illuminate\Support\Facades\Route;

Route::get('',[ControlRoute::class,'index'])
    ->name('home');
Route::get('login',[ControlRoute::class,'login'])
    ->name('login');
Route::get('join-us',[ControlRoute::class,'register'])
    ->name('register');
Route::get('logout',[ControlRoute::class,'logout'])
    ->name('logout');
Route::resource('user',Annuaire::class);
Route::resource('Comment',CommentController::class);