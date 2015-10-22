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

	

$username = array();

	 for ($i = 0; $i < $users; $i++)
	 {
				$username[] = '$faker->title.' '.$faker->name';
	}

	return view('devtools.randomusers', ['username' => $username]);

	}





















?>
