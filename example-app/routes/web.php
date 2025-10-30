<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/post', [PostController::class, 'index'])->name('post.index');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
// リソースコントローラー用のルートを設定
Route::resource('post', PostController::class);

// Route::middleware(['auth', 'admin'])->group(function () {
//     // 投稿画面を表示
//     Route::get('/post/create', [PostController::class, 'create'])->name('post.create');
//     // 投稿を保存
//     Route::post('/post',[PostController::class,'store'])->name('post.store');
//     // 一覧画面を表示
//     Route::get('/post', [PostController::class, 'index'])->name('post.index');
// });

// // 個別表示機能
// Route::get('post/show/{post}', [PostController::class, 'show'])->name('post.show');
// // 編集画面/更新
// Route::get('post/{post}/edit', [PostController::class, 'edit'])->name('post.edit');
// Route::patch('post/{post}', [PostController::class, 'update'])->name('post.update');
// // 削除
// Route::delete('post/{post}', [PostController::class, 'destroy'])->name('post.destroy');

require __DIR__.'/auth.php';
