<?php

// namespace App\Http\Controllers;

// use App\Models\ContactFormSubmission;
// use Illuminate\Http\Request;

// class ContactFormController extends Controller
// {
//     public function store(Request $request)
//     {
//         // Validate the form data
//         $request->validate([
//             'name' => 'required|string|max:255',
//             'email' => 'required|string|email|max:255',
//             'message' => 'required|string',
//         ]);

//         // Create a new submission
//         ContactFormSubmission::create($request->all());

//         return redirect()->back()->with('success', 'Your message has been sent!');
//     }

//     // Retrieve all submissions
//     public function index()
//     {
//         $submissions = ContactFormSubmission::all(); // Retrieve all submissions
//         return view('index', compact('submissions')); // Pass data to view
//     }

//     // Show the edit form for a specific submission
//     public function edit($id)
//     {
//         $submission = ContactFormSubmission::findOrFail($id);

//         if (!$submission) {
//             // Redirect back with an error message if the ID is not found
//             return redirect()->route('index')->with('error', "Submission with ID {$id} is not found.");
//         }
//         return view('edit', compact('submission'));
//     }

//     // Update a specific submission
//     public function update(Request $request, $id)
//     {
//         $submission = ContactFormSubmission::findOrFail($id);

//         if (!$submission) {
//             return redirect()->route('index')->with('error', "Submission with ID {$id} is not found.");
//         }
        
//         // Validate the updated form data
//         $request->validate([
//             'name' => 'required|string|max:255',
//             'email' => 'required|string|email|max:255',
//             'message' => 'required|string',
//         ]);

        
//         $submission->update($request->all());

//         return redirect()->route('contact.index')->with('success', 'Submission updated successfully.');
//     }

//     // Delete a specific submission
//     public function destroy($id)
//     {
//         $submission = ContactFormSubmission::findOrFail($id);
//         $submission->delete();
        
//         return redirect()->route('contact.index')->with('success', 'Submission deleted successfully.');
//     }
// }

namespace App\Http\Controllers;

use App\Models\ContactFormSubmission;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        ContactFormSubmission::create($request->all());
        return redirect()->route('contact.index')->with('success', 'Your message has been sent!');
    }

    public function index()
    {
        $submissions = ContactFormSubmission::all();
        return view('index', compact('submissions'));
    }

    public function edit($id)
    {
        $submission = ContactFormSubmission::find($id);
        if (!$submission) {
            return redirect()->route('contact.index')->with('error', "Submission with ID $id not found, because the database is updated.");
        }
        return view('edit', compact('submission'));
    }

    public function update(Request $request, $id)
    {
        $submission = ContactFormSubmission::find($id);
        if (!$submission) {
            return redirect()->route('contact.index')->with('error', "Submission with ID $id not found.");
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        $submission->update($request->all());
        return redirect()->route('contact.index')->with('success', 'Submission updated successfully.');
    }

    public function destroy($id)
    {
        $submission = ContactFormSubmission::find($id);
        if (!$submission) {
            return redirect()->route('contact.index')->with('error', "Submission with ID $id not found.");
        }

        $submission->delete();
        return redirect()->route('contact.index')->with('success', 'Submission deleted successfully.');
    }
}

