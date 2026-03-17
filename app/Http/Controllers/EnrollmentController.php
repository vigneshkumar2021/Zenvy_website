<?php

namespace App\Http\Controllers;

use App\Models\Enrollment;
use Illuminate\Http\Request;

class EnrollmentController extends Controller
{
    /**
     * Show the enrollment form.
     */
    public function create(Request $request)
    {
        $course = $request->query('course');
        return view('enroll', compact('course'));
    }

    /**
     * Store a new enrollment.
     */
    public function store(Request $request)
    {
        \Log::info('Enrollment attempt:', $request->all());

        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'course_name' => 'required|string|max:255',
            'batch' => 'required|string|in:morning,afternoon,evening',
        ]);

        $enrollment = Enrollment::create($validated);
        \Log::info('Enrollment created:', $enrollment->toArray());

        if ($request->ajax() || $request->wantsJson()) {
            return response()->json(['message' => 'Enrollment Successful! Team will contact you soon.']);
        }

        return redirect()->route('courses')->with('success', 'your successfully enroll the course team will contact soon');
    }

    /**
     * Update enrollment status.
     */
    public function updateStatus(Request $request, Enrollment $enrollment)
    {
        $request->validate([
            'status' => 'required|in:success,rejected,pending',
        ]);

        $enrollment->update(['status' => $request->status]);

        return back()->with('success', 'Enrollment status updated to ' . ucfirst($request->status));
    }

    /**
     * Display a listing of enrollments for admin.
     */
    public function index()
    {
        $enrollments = Enrollment::latest()->paginate(20);
        return view('admin.enrollments.index', compact('enrollments'));
    }
}
