<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
    return view('index');
    }

    public function confirm(Request $request)
    {
    $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tell1', 'tell2', 'tell3', 'address', 'building', 'select', 'detail']);
    return view('confirm', compact('contact'));
    }

    public function store(Request $request){
        $contact = $request->only(['last_name', 'first_name', 'gender', 'email', 'tell1', 'tell2', 'tell3', 'address', 'building', 'select', 'detail']);
        Contact::create($contact);
        if($request->input('back') == 'back'){
            return redirect('/')
                        ->withInput();
}
        return view('thanks');
    }

    public function register()
    {
        return view('register');
    }

    public function login()
    {
        return view('login');
    }
}
