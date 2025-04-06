<?php

use App\Http\Controllers\UserController;

Route::get("/users/email",[UserController::class,"checkEmail"]);
Route::get("/users/register_email",[UserController::class,"checkRegisterEmail"]);