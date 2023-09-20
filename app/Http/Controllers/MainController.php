<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class MainController extends Controller
{
    function index(): View {
        $title = 'Main Page';
        $subtitle = '<em>Welcome</em>!';
        $users = ['Albedo', 'One'];

        return view('home', compact('title', 'subtitle', 'users'));
    }

    function contacts(): View
    {
        return view('contacts');
    }

    function sendMail()
    {
        return 'text';
    }

}
