<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Bem vindo ao laravel';
        return view ('pages.index')->with('title', $title);
    }

    public function about(){
        return view('pages.about');
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Crazy guy', 'Plays bfh', 'wtf']
        );
        return view('pages.services')->with($data);
    }
}
