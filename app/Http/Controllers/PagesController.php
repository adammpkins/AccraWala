<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PagesController extends Controller
{
    public function index()
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
        return redirect('/admin/pages');
    }
    public function destroy(Page $page)
    {
        $page->delete();
        return redirect('/admin/pages');
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
}
