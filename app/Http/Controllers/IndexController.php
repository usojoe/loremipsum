<?php

// define the relevant namespaces
namespace App\Http\Controllers;

// use the following packages
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

// extend how a controller works for this page through a class
class IndexController extends Controller
{

// direct users who getIndex to the index view
	public function getIndex()
	{
		return view('devtools.index');
	}

// display information from the LoremIpsum request form
public function postFakerIndex(Request $request)

{
// use this package vendor, fzaninotto/Faker

	$faker = \Faker\Factory::create();

// name relevant form variables

	$paragraphs = $request->input('paragraphs');

// define what a block of LoremIpsum Text looks like within the parameters of Faker

	$blocks = $faker->text(2000);

// validate the information in the form was entered correctly

	$this->validate($request, [

	'paragraphs' => 'required|integer|min:1',

	]);

$displayblocks = array();

// display the LoremIpsum paragraphs

for ($i = 0; $i < $paragraphs; $i++) {

   $displayblocks[] = '$blocks';

//	dd($blocks);

return view('devtools.latinblocks')->with('blocks',$blocks);

}

}
// end display of LoremIpsum


// begin display of Random User information
public function postIndex(Request $request)
{
	// call the package fzaninotto/Faker
	  $faker = \Faker\Factory::create();

	// name relevant form variables
		$users = $request->input('numberofusers');
		$birthday = $request->input('birthday');
		$images = $request->input('image');
		$address = $request->input('streetaddress');
		$profile = $request->input('profile');


	// validate information is entered into the form correctly
	  $this->validate($request, [

		'numberofusers' => 'required|integer|min:1',

		]);
	// name data source variables from source package
						$name = $faker->name($gender = null|'male'|'female');
				 		$imagesfaker = $faker->image;
				 		$addressfaker = $faker->address;
				 		$emailfaker = $faker->email;
				 		$birthdayfaker = $faker->date($format = 'Y-m-d', $max = 'now');
				 		$profilefaker = $faker->paragraphs($nb = 3);

	// create an array for a single user with optional selections

		$singleprofile = array();

						$singleprofile[] = $name;

						if ($birthday == "TRUE")
					   	array_push($singleprofile, $emailfaker);

						if ($address == "TRUE")
							array_push($singleprofile, $addressfaker);

						if ($images == "TRUE")
							array_push($singleprofile, $imagesfaker);

						if ($profile == "TRUE")
							array_push($singleprofile, $profilefaker);


		// create an array to collect the called set of profiles from Faker

		$allprofiles = array();

				$allprofiles[] = $singleprofile;

									 for ($i = 0; $i < $users; $i++) {

										 		dd($allprofiles);

return view('devtools.randomusers')->with('allprofiles',$allprofiles);

								}




			//return view('devtools.randomusers',['singleprofile' => $singleprofile]);


/*
    $i = $request->input('numberofusers');
		$image = $request->input('image');
		$birthday = $request->input('birthday');
		$profile = $request->input('profile');
		$streetaddress = $request->input('streetaddress');

		$name = $faker->name;
		$image = $faker->image;
		$streetaddress = $faker->address;
		$email = $faker->email;


		$singleprofile = $name.$email.$profile;
		$singleprofilewithimage = $name.$image.$email.$profile;
		$singleprofilewithimageandaddress = $name.$image.$email.$streetaddress.$profile;
		$singleprofilewithimageaddressandbirthday = $name.$image.$email.$birthday.$streetaddress.$profile;


	$this->validate($request, [

		'numberofusers' => 'required',

		]);


//for each ($i=0; $i < 10; $i++);
//
//	echo $faker->title($gender = null|'male'|'female');
//	echo $faker->name;
//	echo $faker->address;
//	echo $faker->image;

if isset($blocks->)) {

	return view('devtools.randomusers')->with('singleprofilewithimageandaddress', $singleprofilewithimageandaddress)->with('singleprofilewithimageandaddress', $singleprofilewithimageandaddress);


//return view('homepage',['title' => $title,'text' => $content, 'all' => $all ]);
// Create logic for LoremIpsum text
	//	for each('blocks')) {

	//	}
//		$generator = new Badcow\LoremIpsum\Generator();
//
	//	if isset($blocks->)) {

//  echo implode('<p>', $paragraphs);

*/

}
   }


//if (isset($blocks [])) {

//return <?php

//$random = new Rych\Random\Random();

// Generate a 16-byte string of random raw data
//$randomBytes = $random->getRandomBytes(16);

// Get a random integer between 1 and 100
//$randomNumber = $random->getRandomInteger(1, 100);

// Get a random 8-character string using the
// character set A-Za-z0-9./
//$randomString = $random->getRandomString(8);


?>
