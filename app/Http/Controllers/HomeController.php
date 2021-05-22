<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;



class HomeController extends Controller
{
    public function index()
    {
        return view('harsha.index');
    }
    public function about()
{
    return view('harsha.about');
}
public function contact()
{
    return view('harsha.contact');
}
public function tours()
{
    
    return view('harsha.tours');
    
}
public function tourists()
{
    
    return view('harsha.tourists');
    
}
public function checknow()
{
    
    return view('harsha.checknow');
    
}
    
    
}
