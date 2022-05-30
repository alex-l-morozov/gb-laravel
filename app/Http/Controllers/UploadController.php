<?php

namespace App\Http\Controllers;

use App\Models\Upload;
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

        $validated = $request->except(['_token',]);

        $upload = Upload::create($validated);

        if($upload) {
            return redirect()->route('upload')
                ->with('success', 'Запись успешно добавлена');
        }

        return back()->with('error', 'Ошибка добавления');
    }
}
