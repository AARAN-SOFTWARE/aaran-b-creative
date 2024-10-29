<?php

use Illuminate\Support\Facades\Route;

//Common
Route::middleware(['auth:sanctum', 'verified'])->group(function () {

    Route::get('/commons/{id?}', App\Livewire\Common\CommonList::class)->name('commons');
    Route::get('/labels', App\Livewire\Common\LabelList::class)->name('labels');

//    Route::get('Factory', App\Livewire\Demo\Data\Factory\Index::class)->name('Factory');
//    Route::get('productFactory', App\Livewire\Demo\Data\Product\Index::class)->name('productFactory');


});
