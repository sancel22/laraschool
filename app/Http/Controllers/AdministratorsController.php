<?php

namespace App\Http\Controllers;


use App\News;
use App\Http\Requests;
use Illuminate\Http\Request;

class AdministratorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $news = News::paginate(25);
        return view('admins.dashboard', compact('news'));
    }
}
