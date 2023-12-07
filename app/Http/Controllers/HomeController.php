<?php

namespace App\Http\Controllers;

use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;





class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
         // Specify the Blade file you want to load
         $bladeFilePath = resource_path('views\emails\mymail.blade.php');
       $bladeContent = file_get_contents($bladeFilePath);
    //    return response()->json($bladeContent);
    Toastr::success('Messages in here', 'Title', ["positionClass" => "toast-top-center"]);

        return View::make('home',['bladeContent' => $bladeContent]);
    }
}
