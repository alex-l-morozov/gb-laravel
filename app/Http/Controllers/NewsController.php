<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function index()
    {
        $news = DB::table('news')->get();
        return view('news.index', [
            'newsList' => $news
        ]);
    }

    public function show(int $id)
    {
        $news = DB::table('news')->find($id);
        return view('news.show', [
            'news' => $news
        ]);
    }
}
