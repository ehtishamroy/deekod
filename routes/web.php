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
    
    // This perfectly finds your active public folder (whether it's public_html or public)
    $link = $_SERVER['DOCUMENT_ROOT'] . '/storage';

    if (file_exists($link) || is_link($link)) {
        return "Error: A storage folder or broken link already exists exactly here: <br><b>" . $link . "</b><br><br>Please go to your Hostinger File Manager, find that exact folder, delete 'storage', and refresh this page.";
    }

    if (symlink($target, $link)) {
        return "✅ SUCCESS! Your videos will now load. <br>Linked <b>" . $target . "</b> <br>To <b>" . $link . "</b>";
    }
    
    return "Failed to create link. Check folder permissions.";
});
