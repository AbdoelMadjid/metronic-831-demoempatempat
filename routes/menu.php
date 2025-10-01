<?php

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

$pagesPath = resource_path('views/pages');

$files = File::allFiles($pagesPath);

foreach ($files as $file) {
    // Ambil path relatif terhadap folder "pages"
    $relativePath = $file->getRelativePathname(); // contoh: "apps/projects/targets.blade.php"

    // Hilangkan extension .blade.php
    $relativePath = str_replace('.blade.php', '', $relativePath);

    // Untuk route name (pakai titik)
    $routeName = str_replace(['/', '\\'], '.', $relativePath);

    // Untuk URL path (pakai slash)
    $routeUrl = '/' . str_replace(['\\'], '/', $relativePath);

    Route::get($routeUrl, function () use ($routeName) {
        return view('pages.' . $routeName);
    })->name($routeName);
}
