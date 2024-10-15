<?php

use App\Http\Livewire\Film\FilmList;
use App\Http\Livewire\Film\FilmShow;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\Film\FilmTable as AdminFilmTable;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::prefix('film')->name('film.')->group(function () {
        Route::get('/list', FilmList::class)->name('list');
        Route::get('/show/{film}', FilmShow::class)->name('show');
    });

    Route::middleware(['admin'])->prefix('admin')->name('admin.')->group(function () {
        Route::prefix('film')->name('film.')->group(function () {
            Route::get('/list', AdminFilmTable::class)->name('list');
        });
    });
});
