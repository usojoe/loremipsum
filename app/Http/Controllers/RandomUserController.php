<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RandomUserController extends Controller
{
    public function postIndex() {
        $faker = \Faker\Factory::create();

				//Take data form input fields

$numberofusers = \Input::get("numberofsers");
$profile = \Input::get("profile");
$image = \Input::get("image");
$streetaddress = \Input::get("streetaddress");

    }
}

?>
