<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request,
    Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $category = DB::table('categories')->get();
        return view('category.index', [
            'categoryList' => $category
        ]);
    }

    public function show(int $id)
    {
        $category = DB::table('categories')->find($id);
        $category->news = DB::table('news')->where('category_id', '=', $id)->get();
        return view('category.show', [
            'category' => $category
        ]);
    }
}
