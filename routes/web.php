<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\RegistrationController;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

// Charity Website Routes - Medical Support Focus
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/apply', [ApplicationController::class, 'create'])->name('apply');
Route::post('/apply', [ApplicationController::class, 'store'])->name('apply.store');
Route::get('/apply/success', [ApplicationController::class, 'success'])->name('apply.success');

// Legacy routes (if needed for existing system)
Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/join', [RegistrationController::class, 'create'])->name('join.create');
Route::post('/join', [RegistrationController::class, 'store'])->name('join.store');
Route::get('/join/success', [RegistrationController::class, 'success'])->name('join.success');

Route::get('lang/{locale}', function ($locale) {
    if (! in_array($locale, ['en', 'ar'])) {
        abort(400);
    }

    session()->put('locale', $locale);

    return redirect()->back();
})->name('switch-language');

Route::middleware(['auth'])->get('/admin/applications/{application}/download', function (Request $request, Application $application) {
    $path = $request->query('path');
    $files = $application->files ?? [];

    if (! in_array($path, $files)) {
        abort(404);
    }

    if (! Storage::disk('local')->exists($path)) {
        abort(404);
    }

    return Storage::disk('local')->download($path);
})->name('applications.download');
