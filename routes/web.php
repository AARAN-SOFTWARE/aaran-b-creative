<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;

Route::get('/', App\Livewire\Web\Home\Index::class)->name('home');
Route::get('/about', App\Livewire\Web\Home\About::class)->name('about');
Route::get('/product', App\Livewire\Web\Home\Product::class)->name('product');
Route::get('/contact', App\Livewire\Web\Home\Contact::class)->name('contact');
Route::get('/blog-post', App\Livewire\BlogPost\Blog::class)->name('blog-post');
Route::get('/blog-post/{id}/show', App\Livewire\BlogPost\Blogshow::class)->name('blog-post.show');
Route::get('/service', App\Livewire\Web\Home\Service::class)->name('service');
Route::get('/info', App\Livewire\Web\Home\Info::class)->name('info');


Route::get('/user/register/{id}/{position}', App\Livewire\Authentication\AddUser::class)->name('user.register');


Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified',])->group(function () {

    Route::get('/elements', App\Livewire\Utilities\UiElements\Index::class)->name('elements');
    Route::get('/icons', App\Livewire\Utilities\Icon\Index::class)->name('icons');
    Route::get('/test', App\Livewire\Test\Index::class)->name('test');
    Route::get('/tree', App\Livewire\Network\Tree\Index::class)->name('tree');
    Route::get('/userTreeView', App\Livewire\Network\Tree\UserTreeView::class)->name('user-tree-view');
    Route::get('/tree/show', App\Livewire\Network\Tree\Show::class)->name('tree.show');
    Route::get('/topUp', App\Livewire\Network\Topup\Index::class)->name('topUp.index');
    Route::get('/topUp/report', App\Livewire\Network\Topup\Show::class)->name('topUp.report');
    Route::get('/level', App\Livewire\Reward\Level::class)->name('level');
    Route::get('/profile', App\Livewire\Profile\Index::class)->name('profile');
    Route::get('/withdraw', App\Livewire\Payout\Withdraw::class)->name('withdraw');
    Route::get('/withdraw/report', App\Livewire\Payout\Report::class)->name('withdraw.report');
    Route::get('/wallet/report', App\Livewire\Wallet\Report::class)->name('wallet.report');
    Route::get('membership', App\Livewire\Network\Member::class)->name('membership');
    Route::get('blogTags',App\Livewire\BlogPost\BlogTag::class)->name('blogTags');

});

