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
    $docRoot = $_SERVER['DOCUMENT_ROOT'] ?? 'NOT SET';
    $publicPath = public_path();
    $link1 = $docRoot . '/storage';
    $link2 = $publicPath . '/storage';

    $output = "<pre>";
    $output .= "DOCUMENT_ROOT: " . $docRoot . "\n";
    $output .= "public_path(): " . $publicPath . "\n";
    $output .= "storage target: " . $target . "\n";
    $output .= "storage target exists? " . (file_exists($target) ? 'YES' : 'NO') . "\n";
    $output .= "\n--- Link via DOCUMENT_ROOT ---\n";
    $output .= "link path: " . $link1 . "\n";
    $output .= "exists? " . (file_exists($link1) ? 'YES' : 'NO') . "\n";
    $output .= "is_link? " . (is_link($link1) ? 'YES' : 'NO') . "\n";
    $output .= "\n--- Link via public_path() ---\n";
    $output .= "link path: " . $link2 . "\n";
    $output .= "exists? " . (file_exists($link2) ? 'YES' : 'NO') . "\n";
    $output .= "is_link? " . (is_link($link2) ? 'YES' : 'NO') . "\n";
    $output .= "</pre>";

    // Try to remove any broken existing link and recreate
    foreach ([$link1, $link2] as $link) {
        if (is_link($link)) {
            unlink($link); // Remove broken symlink
        }
    }

    // Try creating with DOCUMENT_ROOT path
    if (!file_exists($link1) && symlink($target, $link1)) {
        return $output . "<br><b style='color:green'>✅ SUCCESS via DOCUMENT_ROOT! Link created at: " . $link1 . "</b>";
    }

    // Fallback: try public_path
    if (!file_exists($link2) && symlink($target, $link2)) {
        return $output . "<br><b style='color:green'>✅ SUCCESS via public_path! Link created at: " . $link2 . "</b>";
    }

    return $output . "<br><b style='color:red'>❌ Failed. Copy the paths above and send them so I can fix this.</b>";
});
