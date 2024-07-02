<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
   
    return view('welcome');
});


Route::get('/product', [ProductController::class, 'index'])->name('product.index');
Route::get('/product/create', [ProductController::class, 'create'])->name('product.create');
Route::post('/product', [ProductController::class, 'store'])->name('product.store');




Route::get('/teste', function () {

    $nome = "Marcos";
    $clients = ["Jose", "Pedro", "Luan"];

    return view('test', ['name' => $nome, 'clients' => $clients]);
});