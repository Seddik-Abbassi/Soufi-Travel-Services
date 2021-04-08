<?php

namespace App\Http\Controllers;

use App\Models\Footballcamp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class MainController extends Controller
{
    public function index()
    {
        $footballcamps = Footballcamp::get();
        return view('home', compact('footballcamps'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function about()
    {
        return view('about');
    }
}
