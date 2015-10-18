<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class RandomUserController extends Controller {

	public function getRandomUser() {

		return view('devtools.index');

 $faker = \Faker\Factory::create();

	  //    $name = $faker->name;
	//			$address = $faker->address;

}
	public function postRandomUser(Request $request) {
			$this->validate(
			$request,
			[

				'numberofusers' => 'required|min:1|max:100',


			]

				);

//		return 'New Name:'.$request->input('name');

	}

}

?>
