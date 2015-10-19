<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RandomUserController extends Controller
{
	public function postIndex(Request $request)
	{
		  $faker = \Faker\Factory::create();

	    $numberofusers = $request->input('numberofusers');
			$blocks = $request->input('blocks');
			$image = $request->input('image');
			$birthday = $request->input('birthday');
			$profile = $request->input('profile');
			$streetaddress = $request->input('streetaddress');


			echo $faker->name;
			echo $faker->address;
			echo $faker->text;

		}

	}





















?>
