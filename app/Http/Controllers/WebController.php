<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    function index()
    {
        $title = "Unifab.uk | Premium Uniform & Workwear Supplier in the UK";
        $description = "";
        $keywords = "";
        $schema = "";
        return view("index", compact('title', 'description', 'keywords', 'schema'));
    }
}
