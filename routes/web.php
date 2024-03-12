<?php

use App\Models\Book;
use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TestController;

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

Route::get('/', function () {
    //宣告變數
    $a = 0;
    $b = [1, 2, 3];
    $c = '你好';
    $d = (object)['id' => 1];
    $books = Book::get();

    $data = [
        'books' => $books,
        'count' => 1,
        'title' => '血鑽石',
    ];


    //中止並印出
    // dd($books);


    //跳轉至指定頁面
    // return Inertia::render('Test', [
    //     'canLogin' => Route::has('login'),
    //     'canRegister' => Route::has('register'),
    //     'laravelVersion' => Application::VERSION,
    //     'phpVersion' => PHP_VERSION,
    // ]);

    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);

    return Inertia::render('Test', [
        'response' => $data,
    ]);
});

//將邏輯放到Controller裡
Route::get('/test', [TestController::class, 'index'])->middleware(['auth', 'verified']);

Route::get('/teacher', [TestController::class, 'teacher']);
 




Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
