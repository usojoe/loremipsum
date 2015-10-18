<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class RandomUserController extends Controller {

	public function getRandomUser() {

		return view('devtools.users');

//			  $faker = \Faker\Factory::create();

	  //    $name = $faker->name;
	//			$address = $faker->address;

}

	public function postRandomUser(Request $request) {

		return 'New Name:'.$request->input('name');

	}

}

?>
