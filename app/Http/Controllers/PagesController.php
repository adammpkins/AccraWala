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
        $page = new Page();
        $page->id = 0;
        $page->exists = true;
        $image = $page->addMediaFromRequest('upload')->toMediaCollection('images');
        return response()->json([
           'url' => $image->getUrl('thumb'),
        ]);
    }
}
