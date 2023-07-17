<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Application;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Mail;
use App\Mail\ApplicationSubmitted;
class ApplicationController extends Controller
{
    
    public function ApplyApplication2(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'job_title' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required',
            // 'file' => 'required|array',
            // 'file.*' => 'mimes:pdf,jpeg,jpg,png|max:2048',
        ]);
    //    echo '<pre>'; prin_r($request->all());die();
        // $files = [];
        // if ($request->hasFile('file')) {
        //     foreach ($request->file('file') as $file) {
        //         $extension = $file->getClientOriginalExtension();
        //         $filename = time() . '_' . uniqid() . '.' . $extension;
        //         $path = $file->storeAs('resumes', $filename, 'public');
        //         $files['resume_' . $extension] = $path;
        //     }
        // }
    
        // $validatedData = array_merge($validatedData, $files);
    
        Application::create($validatedData);
    
        return redirect()->back()->with('success', 'Application submitted successfully.');
    }


public function ApplyApplication(Request $request)
{
    $validatedData = $request->validate([
        'name' => 'required',
        'job_title' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
        'message' => 'required',
        'file' => 'required|mimes:pdf,doc,docx,jpeg,jpg,png',
    ]);

    // Convert the first character of each word in job_title to uppercase
    $jobTitle = ucwords($validatedData['job_title']);
    $email = strtolower($validatedData['email']);

    $file = $request->file('file');
    $filePath = $file->store('application_files'); // Change 'application_files' to your desired storage directory

    Application::create([
        'name' => $validatedData['name'],
        'job_title' => $jobTitle,
        'email' => $email,
        'phone' => $validatedData['phone'],
        'message' => $validatedData['message'],
        'file' => $filePath,
    ]);

    // Send email notification
    $applicationData = [
        'name' => $validatedData['name'],
        'job_title' => $jobTitle,
        'email' => $email,
        'phone' => $validatedData['phone'],
        'message' => $validatedData['message'],
        'file_path' => $filePath,
    ];
    Mail::to($email)->send(new ApplicationSubmitted($applicationData));

    return redirect()->back()->with('success', 'Application submitted successfully.');

    // Additional logic or redirect after successful submission
}


public function download($id)
{
    $applications = Application::findOrFail($id);
    $filePath = $applications->file;

    return Storage::download($filePath);
}

public function resumeDonwload(){
    $applications = Application::all();
    return view('download', compact('applications'));
}

    
}
