
<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PostController;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

//編集（edit　2024,3.29）
    Route::get('/products/{post}/edit', [PostController::class, 'edit'])->name('products.edit');
    Route::post('products/{id}/edit', [ProductController::class, 'store'])->name('product.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('products.update');

Route::get('/index', [PostController::class, 'index'])->name('products.index');


Route::middleware('auth')->group(function () {
    Route::get('/index', [ProductController::class, 'index'])->name('product.index');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::group(['prefix' => 'post'], function(){
        Route::get('/dashboard', [ProfileController::class, 'dashboard'])->name('profile.dashboard');
        Route::post('/index', [PostController::class, 'store'])->name('index'); // 修正: storeメソッドに対するルート名を指定
    });
});

require __DIR__.'/auth.php';
