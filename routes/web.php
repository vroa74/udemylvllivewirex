<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Home\Inicio;
use App\Livewire\Category\CategoryComponent;
use App\Livewire\Category\CategoryShow;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/inicio',Inicio::class)->name('inicio');
Route::get('/categorias',CategoryComponent::class)->name('Categorias');
Route::get('/categorias/{category}',CategoryShow::class)->name('Categorias.show');
