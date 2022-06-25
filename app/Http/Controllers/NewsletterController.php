<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Newsletter;

class NewsletterController extends Controller
{
    // Shows a form that unsubscribes you from the newsletter
    public function show($newsletter_id)
    {
        $newsletter = Newsletter::findOrFail($newsletter_id);

        return inertia('Newsletter/Show', [
            'id' => $newsletter->id
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'email' => ['required', 'email'],
        ]);

        if (! Newsletter::where('email', $data['email'] )->exists()) {
            Newsletter::create($data);
        }

        return Redirect::back()->with('successNewsletter', 'You have been subscribed to our newsletter!');
    }

    public function delete(Request $request)
    {
        Newsletter::findOrFail($request->id)->delete();

        return Redirect::route('home')->with('success', 'You have been unsubscribed');
    }
}
