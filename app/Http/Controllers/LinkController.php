<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function registro() {
        return view('registro');
    }

    public function contacto() {
        return view('contacto');
    }

    public function faq() {
        return view('faq');
    }
}
