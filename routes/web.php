<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

Route::get('/', function () {
    $portfolios = \App\Models\Portfolio::orderBy('sort_order')->get();
    return view('welcome', compact('portfolios'));
});

Route::post('/lead', [LeadController::class, 'store'])->name('lead.store');

Route::get('/sitemap.xml', function () {
    $esc = fn (string $value): string => htmlspecialchars($value, ENT_XML1);

    // Collect the images that belong to the homepage so crawlers can index them.
    $siteSetting = \App\Models\SiteSetting::first();
    $images = [];

    if ($siteSetting?->og_image) {
        $images[] = \Illuminate\Support\Facades\Storage::url($siteSetting->og_image);
    }

    foreach (\App\Models\Portfolio::orderBy('sort_order')->get() as $portfolio) {
        foreach (['before_image', 'after_image'] as $field) {
            if ($portfolio->{$field}) {
                $images[] = \Illuminate\Support\Facades\Storage::url($portfolio->{$field});
            }
        }
    }

    // Normalise relative Storage URLs to absolute (sitemaps require full URLs).
    $images = collect($images)
        ->filter()
        ->map(fn (string $url): string => \Illuminate\Support\Str::startsWith($url, ['http://', 'https://']) ? $url : url($url))
        ->unique()
        ->values();

    $latest = \App\Models\Portfolio::max('updated_at');
    $lastmod = $latest
        ? \Illuminate\Support\Carbon::parse($latest)->toAtomString()
        : now()->toAtomString();

    $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
    $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" '
        . 'xmlns:image="http://www.google.com/schemas/sitemap-image/1.1">' . "\n";
    $xml .= '  <url>' . "\n";
    $xml .= '    <loc>' . $esc(url('/')) . '</loc>' . "\n";
    $xml .= '    <lastmod>' . $lastmod . '</lastmod>' . "\n";
    $xml .= '    <changefreq>weekly</changefreq>' . "\n";
    $xml .= '    <priority>1.0</priority>' . "\n";
    foreach ($images as $image) {
        $xml .= '    <image:image>' . "\n";
        $xml .= '      <image:loc>' . $esc($image) . '</image:loc>' . "\n";
        $xml .= '    </image:image>' . "\n";
    }
    $xml .= '  </url>' . "\n";
    $xml .= '</urlset>';

    return response($xml, 200, ['Content-Type' => 'application/xml']);
})->name('sitemap');


