<?php

use App\Livewire\Settings\Appearance;
use App\Livewire\Settings\Password;
use App\Livewire\Settings\Profile;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Route::get('settings/profile', Profile::class)->name('settings.profile');
    Route::get('settings/password', Password::class)->name('settings.password');
    Route::get('settings/appearance', Appearance::class)->name('settings.appearance');

    // user dashboard
    Route::view('/validate/syntax', 'tools.validate-syntax')->name('validate-syntax');
    Route::view('/validate/syntax-bulk', 'tools.validate-syntax-bulk');
    Route::view('/validate/inbox-status', 'tools.inbox-status');
    Route::view('/generate/fake-email-address', 'tools.fake-email-address')->name('fake-email-address');
    Route::view('/generate/emails', 'tools.emails')->name('emails');
    Route::view('/send-emails', 'tools.send-email')->name('send-emails');
    Route::view('/email-templates', 'tools.email-templates')->name('email-templates');
    Route::view('/temp-emails', 'tools.temp-emails')->name('temp-emails');
    Route::view('/inbox-status', 'tools.inbox-status')->name('inbox-status');
    Route::view('/files', 'tools.user-files')->name('user-files');
    Route::view('/inbox', 'tools.inbox')->name('inbox');
});

Route::get('/download-fake-emails', function () {
    $emails = session('bulkEmailsForDownload', []);

    if (empty($emails)) {
        return redirect()->back()->with('error', 'No data to download.');
    }

    $csv = "Email,Job Title\n";
    foreach ($emails as $item) {
        $csv .= "{$item['email']},{$item['job_title']}\n";
    }

    return response($csv)
        ->header('Content-Type', 'text/csv')
        ->header('Content-Disposition', 'attachment; filename=test-emails-paperinbox.csv');
})->name('test-emails-paperinbox.download');

require __DIR__.'/auth.php';
require __DIR__.'/pages.php';
