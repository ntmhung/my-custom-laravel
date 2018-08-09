<?php

namespace App\Http\Controllers;

class PagesController extends Controller
{
    public function index()
    {
        $title = "This is homepage";
        return view("pages.index", compact('title'));
    }

    public function login()
    {
        $title = "Welcome to Laravel";
        return view("pages.login")->with("title", $title);
    }

    public function about()
    {
        $title = "About Us";

        $contact_info = array(
            "address" => "1 Bach Dang",
            "phones" => array("1023456789", "55468564654", "154564125")
        );
        return view("pages.about")->with("title", $title)->with($contact_info);
    }
}
