<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class RandomUserController extends Controller {
	public function __construct() {}

	public function postRandomUser() {

    $faker = \Faker\Factory::create();

		$randomuser = Array();
		$name = Array();
		$birthday = Array();
		$profile = Array();
    $image = Array();
/*
		if (isset($_POST['randomuser']))

			for ($i=0; $i < $_POST['randomuser']; $i++) {
				$randomuser[$i] = Array('name' => $faker->name);

				if (isset($_POST['birthday']))
					$randomuser[$i] = array_merge($randomuser[$i], Array('birthday' => $faker->dateTimeThisCentury->format('Y-m-d')));

				if (isset($_POST['profile']))
					$randomuser[$i] = array_merge($randomuser[$i], Array('profile' => $faker->text));

        if (isset($_POST['image']))
          $randomuser[$i] = array_merge($randomuser[$i]), Array('image') => $faker->image));

			}

		return view('index')
				->with('randomuser', $randomuser);
	}
}
*/
?>
