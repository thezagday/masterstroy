<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class FAQController extends Controller
{
    public function show(): View
    {
        return view('faq');
    }
}
