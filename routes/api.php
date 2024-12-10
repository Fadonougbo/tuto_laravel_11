<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return response()->json(["name"=>"doe"]);
})->middleware('auth:sanctum');

Route::get('/doe', function (Request $request) {
    return response()->json(["age"=>18]);
})->middleware('auth:sanctum');

