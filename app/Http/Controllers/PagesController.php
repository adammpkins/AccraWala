<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function index(Request $request)
    {

        $pages = Page::all();

        return Inertia::render('Index', [
            'pages' => $pages,
        ]);
    }
    public function create(): \Inertia\Response
    {
        return Inertia::render('Create');
    }

    public function store(Request $request)
    {
        $page = new Page;
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->body = $request->body;
        $page->icon = $request->icon;
        $page->save();
        return redirect('/admin/pages')->with('success', 'Page created successfully');
    }
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect('/admin/pages')->with('success', 'Page deleted successfully.');
    }

    public function show(Page $page)
    {
        return Inertia::render('Show', [
            'page' => $page,
        ]);

    }
    public function edit(Page $page)
    {
        return Inertia::render('Edit', [
            'page' => $page,
        ]);
    }

    public function update(Request $request, Page $page)
    {
        $page->title = $request->title;
        $page->slug = $request->slug;
        $page->body = $request->body;
        $page->icon = $request->icon;
        $page->save();
        return redirect('/admin/pages');
    }
    public function upload(Request $request)
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('images'), $fileName);

            $CKEditorFuncNum = $request->input('CKEditorFuncNum');
            $url = asset('images/' . $fileName);
            $msg = 'Image uploaded successfully';
            $response = "<script>window.parent.CKEDITOR.tools.callFunction($CKEditorFuncNum, '$url', '$msg')</script>";

            @header('Content-type: text/html; charset=utf-8');
            echo $response;
        }
    }
}
