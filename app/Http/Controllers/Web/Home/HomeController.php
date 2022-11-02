<?php

namespace App\Http\Controllers\Web\Home;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    // home Page
    public function index(){
        $categories = Category::all();
       
        return view('web.home.index',get_defined_vars());
    }





}
