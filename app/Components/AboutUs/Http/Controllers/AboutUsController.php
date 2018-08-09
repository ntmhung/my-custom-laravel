<?php
/**
 * Created by IntelliJ IDEA.
 * User: minhhung
 * Date: 3/5/18
 * Time: 21:53
 */

namespace App\Components\AboutUs\Http\Controllers;

use App\Http\Controllers\Controller;

class AboutUsController extends Controller
{
    public function about()
    {
        $title = "About Us";

        $contact_info = array(
            "address" => "1 Bach Dang",
            "phones" => array("1023456789", "55468564654", "154564125")
        );
        return view("aboutus::about")->with("title", $title)->with($contact_info);
    }
}