<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PhoneController;


Route::get('/', [PhoneController::class,"index"] );

