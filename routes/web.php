<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::get('/', function () {
    $portfolios = \App\Models\Portfolio::orderBy('sort_order')->get();
    return view('welcome', compact('portfolios'));
});

Route::post('/lead', [LeadController::class, 'store'])->name('lead.store');

Route::get('/fix-storage', function () {
    $target = storage_path('app/public');
    $link = public_path('storage');

    if (file_exists($link)) {
        return "A storage folder or link already exists. Please go to your Hostinger File Manager, open your public folder (or public_html), delete the 'storage' folder/link, and refresh this page.";
    }

    if (symlink($target, $link)) {
        return "SUCCESS! The storage link was created. Your videos will now load.";
    }
    
    return "Failed to create link. Check permissions.";
});
