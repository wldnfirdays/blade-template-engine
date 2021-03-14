<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BladeController extends Controller
{
    public function index ()
    {
        $fruits = array (
            0 => 'Mangga',
            1 => 'Stroberi',
            2 => 'Jambu',
            3 => 'Nanas Muda',
        );

        $name = array (
            0 => 'M Wildan Firdaus'
        );

        return view ('pages.home', compact('name', 'fruits'));
    }

    public function about ()
    {
        return view ('pages.about');
    }

    public function contact ()
    {
        return view ('pages.contact');
    }
}
