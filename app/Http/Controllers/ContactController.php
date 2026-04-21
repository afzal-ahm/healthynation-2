<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        $validated = $request->validateWithBag('enquiry', [
            'fname' => 'required|string|max:255',
            'number' => 'required|string|max:15',
            'fileupload' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
            'stime' => 'required|string',
            'address' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        $to = 'healthynationlab@gmail.com';

        if ($request->hasFile('fileupload')) {
            $path = $request->file('fileupload')->store('uploads');
            $validated['file_path'] = $path; // Save file path in validated data
        }

        $data = [
            'fname' => $request->input('fname'),
            'number' => $request->input('number'),
            'email' => $request->input('email'),
            'stime' => $request->input('stime'),
            'address' => $request->input('address'),
            'filePath' => $validated['file_path'] ?? null, // Use the file path from validated data
        ];

        try {
            Mail::to($to)->send(new ContactMail($data));
        } catch (\Throwable $exception) {
            Log::error('Enquiry form mail send failed.', [
                'message' => $exception->getMessage(),
                'email' => $request->input('email'),
                'phone' => $request->input('number'),
            ]);

            return redirect()
                ->back()
                ->withInput()
                ->with('error', 'Your enquiry was received, but email sending is not working on the server right now. Please try again later or contact us by phone.');
        }

        return redirect()->back()->with('success', 'Message sent successfully!');
    }
}
