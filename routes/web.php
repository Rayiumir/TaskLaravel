<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'admin'], static function ($router){

    // Admin

    $router->get('/', \App\Livewire\Support\Admin\Index::class)->name('admin.index');

    // Users
    $router->get('/users', \App\Livewire\Support\Users\Index::class)->name('users.index');
    $router->get('/users/create', \App\Livewire\Support\Users\Create::class)->name('users.create');
    $router->get('/users/user/{user}', \App\Livewire\Support\Users\Edit::class)->name('users.edit');
    $router->get('/users/trash', \App\Livewire\Support\Users\Trash::class)->name('users.trash');

});
