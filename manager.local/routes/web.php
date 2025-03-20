<?php

use App\Http\Controllers\RouterController;
use App\Http\Controllers\StorageTestController;
use App\Http\Controllers\StorageTestPage;
use App\Http\Controllers\VueRouteController;
use Illuminate\Support\Facades\Route;

Route::get("/{route?}", [RouterController::class, 'compose'])->where('route', '[\/\w\.-]*')->name('route.compose');