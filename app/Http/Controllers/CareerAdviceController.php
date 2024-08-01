<?php

namespace App\Http\Controllers;

use App\Models\CareerAdvice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CareerAdviceController extends Controller
{
    public function index()
    {
        $advice = CareerAdvice::all();
        return view('welcome', compact('advice'));
    }

    public function show($id)
    {
        $advice = CareerAdvice::findOrFail($id);
        return view('show', compact('advice'));
    }
    public function adviceIndex()
    {
        return view('advice');
    }
    public function resourcesIndex()
    {
        return view('resources');
    }
    public function aboutIndex()
    {
        return view('about');
    }
    public function contactIndex()
    {
        return view('contact');
    }
    public function sendContactForm(Request $request)
    {
        // Validate the form data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // Prepare the data for sending (you can customize this as needed)
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        // Send the email (you'll need to configure your mail settings)
        Mail::send('emails.contact', $data, function ($message) {
            $message->to('info@careeradvice.com')
                    ->subject('Contact Form Submission');
        });

        // Redirect back with a success message
        return redirect()->route('contact')->with('status', 'Your message has been sent successfully!');
    }
    public function getStartedIndex()
    {
        dd('here');
    }
    public function joinNowIndex()
    {
        dd('here');
    }
}
