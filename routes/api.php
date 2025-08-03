<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Faker\Factory;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('fake-email', function(?string $jobTitle = null)
{      
    $email = Factory::create()->email;
    $jobTitle = Factory::create()->jobTitle;

        return [
            'job_title' => $jobTitle,
            'email' => $email,
        ];
});
