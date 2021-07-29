<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get(
    '/', 
    [HomeController::class, 'index']
);

route::get(
    '/contato',
    [HomeController::class, 'contato']
);

route::get(
    '/calculadora/{op}',
    [HomeController::class, 'calculadora']
);

route::post(
    '/soma',
    [HomeController::class, 'soma']
);

route::post(
    '/sub',
    [HomeController::class, 'sub']
);
