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

    public function footballcamps()
    {
        $footballcamps = Footballcamp::get();
        return view('footballcamps', compact('footballcamps'));
    }

    public function footballcamp($id)
    {
        $footballcamp = Footballcamp::find($id);
        return View::make("footballcamp", compact('footballcamp'));
    }

}
