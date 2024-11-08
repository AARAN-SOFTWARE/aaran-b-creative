<?php

use Illuminate\Support\Facades\Route;

//Common
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
//    Route::get('/members', App\Livewire\Member\Index::class)->name('member.index');
});
