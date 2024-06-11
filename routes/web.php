<?php

use App\Http\Controllers\bukuhutangController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    //return view('welcome');

    return redirect('bukuhutang');
});
Route::resource('bukuhutang', bukuhutangController::class);
Route::get('/bukuhutang', [bukuhutangController::class, 'index'])->name('bukuhutang');
Route::post('/bukuhutang', [bukuhutangController::class, 'store'])->name('bukuhutang.post');
Route::delete('/bukuhutang/{id}',[bukuhutangController::class,'destroy'])->name('bukuhutang.delete');
