<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionsController;
use App\Http\Controllers\ShopifyController;

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

Route::get('/questions', [QuestionsController::class, 'showQuestions'])->name('view-questions');
Route::get('/add-questions', [QuestionsController::class, 'addQuestions'])->name('add-questions');
Route::post('/save-questions', [QuestionsController::class, 'saveQuestions'])->name('save-questions');

Route::get('shopify', [ShopifyController::class, 'index'])->middleware(['verify.shopify']);

