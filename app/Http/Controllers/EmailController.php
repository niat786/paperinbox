<?php

namespace App\Http\Controllers;

use Faker\Factory as Faker;

class EmailController extends Controller
{

    function generateFakeEmailWithJobTitle(?string $jobTitle = null): string
    {
        $email = Faker::create()->email;
        $jobTitle = Faker::create()->jobTitle;

        return response()->json([
            'job_title' => $jobTitle,
            'email' => $email,
        ]);
    }
}
