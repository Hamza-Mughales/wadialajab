<?php

use App\Http\Controllers\RegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
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
