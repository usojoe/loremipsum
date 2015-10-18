<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class RandomUserController extends Controller {

	public function postRandomUser() {

		return view('/devtools')->with('$name','$address');
	}

	public function getRandomUser() {
		    $faker = \Faker\Factory::create();

	      $name = $faker->name;
				$address = $faker->address;


	}

}

?>
