<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
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

        $validated = $request->except(['_token',]);

        $feedback = Feedback::create($validated);

        if($feedback) {
            return redirect()->route('feedback')
                ->with('success', 'Запись успешно добавлена');
        }

        return back()->with('error', 'Ошибка добавления');
    }
}
