<?php

use App\Http\Controllers\PejabatPenilaiAuth\AuthenticatedSessionController;
use App\Http\Controllers\PejabatPenilaiAuth\ConfirmablePasswordController;
use App\Http\Controllers\PejabatPenilaiAuth\EmailVerificationNotificationController;
use App\Http\Controllers\PejabatPenilaiAuth\EmailVerificationPromptController;
use App\Http\Controllers\PejabatPenilaiAuth\NewPasswordController;
use App\Http\Controllers\PejabatPenilaiAuth\PasswordResetLinkController;
use App\Http\Controllers\PejabatPenilaiAuth\RegisteredUserController;
use App\Http\Controllers\PejabatPenilaiAuth\VerifyEmailController;
use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['guest:pejabat_penilais'], 'prefix' => 'pejabat_penilais','as' => 'pejabat_penilais.'], function() {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('reset-password', [NewPasswordController::class, 'store'])
                ->name('password.update');
});

Route::group(['middleware' => ['auth:pejabat_penilais'], 'prefix' => 'pejabat_penilais','as' => 'pejabat_penilais.'], function() {
    Route::get('verify-email', [EmailVerificationPromptController::class, '__invoke'])
                ->name('verification.notice');

    Route::get('verify-email/{id}/{hash}', [VerifyEmailController::class, '__invoke'])
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');
});
