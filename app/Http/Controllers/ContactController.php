<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    // 入力ページ（/）
    public function index()
    {
        return view('contact.index');
    }

    // 確認ページ（/confirm）
    public function confirm(Request $request)
    {
        $inputs = $request->all();

        return view('contact.confirm', [
            'inputs' => $inputs,
        ]);
    }

    // サンクスページ（/thanks）
    public function thanks()
    {
        return view('contact.thanks');
    }
}

