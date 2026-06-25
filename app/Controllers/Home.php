<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'current_page' => 'home'
        ];
        return view('home', $data);
    }

    public function about(): string
    {
        $data = [
            'current_page' => 'about'
        ];
        return view('about', $data);
    }

    public function solution(): string
    {
        $data = [
            'current_page' => 'solution'
        ];
        return view('solution', $data);
    }

    public function features(): string
    {
        $data = [
            'current_page' => 'features'
        ];
        return view('features', $data);
    }

    public function pricing(): string
    {
        $data = [
            'current_page' => 'pricing'
        ];
        return view('pricing', $data);
    }
}
