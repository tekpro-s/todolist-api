<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodosController;

Route::apiResource('/todos', TodosController::class);
