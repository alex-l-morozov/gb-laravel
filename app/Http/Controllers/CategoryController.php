<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $category = $this->getCategory();
        return view('category.index', [
            'categoryList' => $category
        ]);
    }

    public function show(int $id)
    {
        if ($id > 10) {
            abort('404');
        }
        $category = $this->getCategory($id);
        return view('category.show', [
            'category' => $category
        ]);
    }
}
