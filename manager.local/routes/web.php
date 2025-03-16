<?php

use App\Http\Controllers\StorageTestController;
use App\Http\Controllers\StorageTestPage;
use App\Http\Controllers\VueRouteController;
use Illuminate\Support\Facades\Route;

Route::get("/{route?}", fn() => view('layout.main'))->where('route', '[\/\w\.-]*');