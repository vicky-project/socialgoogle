<?php
use Modules\SocialGoogle\Http\Controllers\GoogleProfileController;

Route::middleware(['auth', 'web'])->prefix('google')->name('google.')->group(function () {
  Route::get('profile', [GoogleProfileController::class, 'show'])->name('profile');
});