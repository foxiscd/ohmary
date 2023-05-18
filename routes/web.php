<?php

use App\Http\Middleware\ShareView;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ShareView::class], function () {
    Route::get('admin/{any?}', function () {
        return view('layouts.admin');
    })->where('any', '.*');
});

Route::group(['middleware' => ShareView::class], function () {
    Route::get('{any}', function () {
        return view('layouts.photo');
    })->where('any', '.*');
});


