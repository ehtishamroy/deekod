<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::get('/', function () {
    $portfolios = \App\Models\Portfolio::orderBy('sort_order')->get();
    return view('welcome', compact('portfolios'));
});

Route::post('/lead', [LeadController::class, 'store'])->name('lead.store');
