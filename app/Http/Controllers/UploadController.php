<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UploadController extends Controller
{
    public function index()
    {
        return view('upload.index');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'description' => ['required', 'string']
        ]);

        \Storage::append('db/upload.txt', json_encode($request->only(['name', 'phone', 'email','description'])));

        return response()->json($request->only(['name', 'phone', 'email','description']), 201);
    }
}
