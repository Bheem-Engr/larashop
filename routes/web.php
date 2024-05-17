<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('welcome');
})->middleware(['verify.shopify'])->name('home');

//About Page
Route::get('/about', function () {
    return view('about');
})->middleware(['verify.shopify'])->name('about');

//Products Page
Route::get('/products', function () {
    return view('products');
})->middleware(['verify.shopify'])->name('products');

Route::get('/questions', [\App\Http\Controllers\QuestionsController::class, 'showQuestions'])->name('view-questions');
Route::get('/add-questions', [\App\Http\Controllers\QuestionsController::class, 'addQuestions'])->name('add-questions');
Route::post('/save-questions', [\App\Http\Controllers\QuestionsController::class, 'saveQuestions'])->name('save-questions');

Route::get('shopify', '\App\Http\Controllers\ShopifyController@index')->middleware(['verify.shopify']);

