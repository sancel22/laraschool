<?php

namespace App\Http\Controllers;

use App\News;
use App\Http\Requests;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $news = News::all();
        return view('news.index', compact('news'));
    }

    public function create()
    {
        return view('news.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);
        $news = new News();
        $news->create($request->all());
        $request->session()->flash('success', 'Successfully Added');
        return redirect('/news');
    }

    public function edit(News $news)
    {
        return view('news.edit', compact('news'));
    }

    public function update(Request $request, News $news)
    {
        $this->validate($request, [
            'title' => 'required',
            'body' => 'required'
        ]);

        $news->update($request->all());
        $request->session()->flash('success', 'Successfully Edited');
        return back();
    }

    public function show(News $news)
    {
        return view('news.show', compact('news'));
    }

    public function destroy(Request $request, News $news)
    {
        $news->delete();
        $request->session()->flash('success', 'Successfully Deleted');
        return back();
    }
}
