<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BilldingController extends Controller
{
    public function index()
    {
        return "建物です";
    }     
    public function desktop($text = "")
    {
        return "部屋番号は{$text}です";
    }
}
