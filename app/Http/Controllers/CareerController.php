<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class CareerController extends Controller
{
    public function show(): View
    {
        return view('career');
    }
}
