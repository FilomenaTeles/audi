<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class audiController extends Controller
{
    public function index()
    {
        $helloWorld = 'Hello World';
        $name       ='Filomena';
        return view('pages.index',
            [
                'helloWorld' => $helloWorld,
                'name'       => $name
            ]
        );
    }

    public function gallery()
    {
        $gallery = 'Galeria';
        return view('pages.gallery',
            [
                'gallery' => $gallery
            ]
        );
    }

    public function blog()
    {
        $blog = 'Blog';
        return view('pages.blog',
            [
                'blog' => $blog
            ]
        );
    }


    public function contactus()
    {
        $contact = 'Contact';
        return view('pages.contact-us',
            [
                'contact' => $contact
            ]
        );
    }
}
