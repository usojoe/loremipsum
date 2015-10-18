<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class RandomUserController extends Controller {

	public function createPeople() {

    $faker = \Faker\Factory::create();

		$address = Array('$faker->address');
		$name = Array('$faker->name');
		$birthday = Array('$faker->birthday');
		$profile = Array('$faker->text');
    $image = Array('$faker->image');

	}
}

?>
