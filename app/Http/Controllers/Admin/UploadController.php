<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Upload;
use App\Queries\QueryBuilderUpload;
use Illuminate\Http\Request;

class UploadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index(QueryBuilderUpload $upload)
    {
        return view('admin.upload.index', [
            'uploads' => $upload->getFeedback()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('admin.upload.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->only(['name', 'description', 'phone', 'email']);
        $upload = new Upload($validated);

        if($upload->save()) {
            return redirect()->route('admin.upload.index')
                ->with('success', 'Запись успешно добавлена');
        }

        return back()->with('error', 'Ошибка добавления');
    }

    /**
     * Display the specified resource.
     *
     * @param Upload $upload
     * @return \Illuminate\Http\Response
     */
    public function show(Upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Upload $upload
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Upload $upload)
    {
        return view('admin.upload.edit', [
            'upload' => $upload
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param Upload $upload
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, Upload $upload)
    {
        $validated = $request->only(['name', 'description', 'phone', 'email']);

        $upload = $upload->fill($validated);
        if($upload->save()) {
            return redirect()->route('admin.upload.index')
                ->with('success', 'Запись успешно обновлена');
        }

        return back()->with('error', 'Ошибка обновления');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Upload $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(Upload $upload)
    {
        //
    }
}
