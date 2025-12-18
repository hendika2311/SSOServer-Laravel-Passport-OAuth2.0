<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Hapus Passport::routes();

// API Routes
Route::middleware('auth:api', 'scope:view-user')->get('/user', function (Request $request) {
    return $request->user();
});
