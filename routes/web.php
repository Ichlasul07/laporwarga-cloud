<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReportController;

Route::get('/', function () {
    return redirect('/reports');
});

Route::resource('reports', ReportController::class);
