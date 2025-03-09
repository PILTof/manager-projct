<?php

use App\Http\Controllers\StorageTestController;
use App\Http\Controllers\StorageTestPage;
use Illuminate\Support\Facades\Route;

Route::get('/', fn() => view('pages.mainpage'));