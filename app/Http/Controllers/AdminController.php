<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // 追加！

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function contacts()
    {
        $contacts = Contact::paginate(10);
        return view('admin.contacts', compact('contacts'));
    }
}


