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

    function about_us()
    {
        $title = "Unifab.uk | Premium Uniform & Workwear Supplier in the UK";
        $description = "";
        $keywords = "";
        $schema = "";
        return view("about", compact('title', 'description', 'keywords', 'schema'));
    }

    function csr()
    {
        $title = "Unifab.uk | Premium Uniform & Workwear Supplier in the UK";
        $description = "";
        $keywords = "";
        $schema = "";
        return view("csr", compact('title', 'description', 'keywords', 'schema'));
    }

    function contact_us()
    {
        $title = "Unifab.uk | Premium Uniform & Workwear Supplier in the UK";
        $description = "";
        $keywords = "";
        $schema = "";
        return view("contact", compact('title', 'description', 'keywords', 'schema'));
    }
}
