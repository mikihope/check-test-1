<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class AdminController extends Controller
{
    public function contacts(Request $request)
    {
        $query = Contact::query();

        if ($request->filled('keyword')) {
            $keyword = $request->input('keyword');
            $query->where('name', 'like', "%{$keyword}%")
                  ->orWhere('email', 'like', "%{$keyword}%")
                  ->orWhere('content', 'like', "%{$keyword}%");
        }

        if ($request->filled('category')) {
            $query->where('category', $request->input('category'));
        }

        $contacts = $query->paginate(10)->appends($request->all());

        return view('admin.contacts', compact('contacts'));
    }
    // app/Http/Controllers/AdminController.php

    public function index()
    {
        return view('admin.index');
    }

}

