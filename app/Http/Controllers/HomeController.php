<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
    /**
     * Display the home page
     */
    public function index()
    {
        return view('home');
    }

    /**
     * Handle contact form submission
     */
    public function contact(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:5000',
        ]);

        // Store in database
        DB::table('contacts')->insert([
            'name' => $validated['name'],
            'phone' => $validated['phone'],
            'subject' => $validated['subject'],
            'message' => $validated['message'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Optional: Send email notification
        // Mail::to('hello@farmeracademy.com')->send(new ContactFormSubmitted($validated));

        return back()->with('success', 'Thank you for contacting us! We will get back to you within 24 hours.');
    }

    /**
     * Handle newsletter subscription
     */
    public function newsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|max:255|unique:newsletter_subscriptions,email',
        ]);

        DB::table('newsletter_subscriptions')->insert([
            'email' => $validated['email'],
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return back()->with('success', 'Successfully subscribed to our newsletter!');
    }

    /**
     * Set the application locale
     */
    public function setLocale(Request $request, $locale)
    {
        $supportedLocales = ['en', 'uz', 'tr'];

        if (in_array($locale, $supportedLocales)) {
            session(['locale' => $locale]);
        }

        return back();
    }
}
