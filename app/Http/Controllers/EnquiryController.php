<?php

namespace App\Http\Controllers;

use App\Models\Enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'message' => 'required|string',
        ]);

        Enquiry::create($validated);

        return back()->with('success', 'Your message has been sent successfully!');
    }

    public function index()
    {
        $enquiries = Enquiry::latest()->get();
        return view('admin.enquiries', compact('enquiries'));
    }
}
