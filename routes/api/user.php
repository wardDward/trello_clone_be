<?php

use App\Http\Controllers\UserController;

Route::get("/users/email",[UserController::class,"checkEmail"]);