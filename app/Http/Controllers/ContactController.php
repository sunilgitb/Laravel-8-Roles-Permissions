<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Gate;
class ContactController extends Controller
{

    function __construct()
    {
        $this->middleware('role_or_permission:Contact access|Contact create|Contact edit|Contact delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Role create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Role edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Role delete', ['only' => ['destroy']]);
    }

    
    public function index(){
        $contacts = Contact::all();
        return view('admin.contact',compact('contacts'));
       
    }

    public function Contact(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:contacts,email|email:rfc,dns',
            'phone' => 'required|numeric|min:10',
            'message' => 'required',
        ], [
            'email.unique' => 'This email address is already registered.',
        ]);
    
        Contact::create($validatedData);
    
        return redirect()->back()->with('success', 'Thank you for your message! We will get back to you soon.');
    }
    
    
}
