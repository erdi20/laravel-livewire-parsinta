<?php

use App\Livewire\About;
use App\Livewire\Contact;
use App\Livewire\Home;
use Illuminate\Support\Facades\Route;

Route::get('/', Home::class)->name('home');
Route::get('/about', About::class)->name('about');
Route::get('/contact', Contact::class)->name('contact');
Route::get('/posts', App\Livewire\Posts\Index::class)->name('posts.index');
Route::get('/user/{user}', App\Livewire\User\show::class)->name('user.show');
