<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\NewsletterSignups;

class NewsletterController extends Controller
{
    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
        ]);

        if (! NewsletterSignups::where('email', $data['email'] )->exists()) {
            NewsletterSignups::create($data);
        }

        return Redirect::back()->with('successNewsletter', 'You have been subscribed to our newsletter!');
    }
}
