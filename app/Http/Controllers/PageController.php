<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    function home() {
        return view('welcome');
    }

    function about() {
        return view('pages.about');
    }

    function products() {
        return view('pages.product');
    }

    function store() {
        return view('pages.store');
    }
}
