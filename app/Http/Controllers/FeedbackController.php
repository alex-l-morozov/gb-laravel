<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedbackController extends Controller
{
    public function index()
    {
        return view('feedback.index');
    }

    public function save(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string'],
            'description' => ['required', 'string']
        ]);

        \Storage::append('db/feedback.txt', json_encode($request->only(['name', 'description'])));

        return response()->json($request->only(['name', 'description']), 201);
    }
}
