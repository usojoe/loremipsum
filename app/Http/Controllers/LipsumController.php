<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LipsumController extends Controller {

//create LorumIpsum Blocks

	public function postIndex() {

   $generator = new Badcow\LoremIpsum\Generator();

	 $paragraphs = $generator->getParagraphs(\Input::get("blocks"));

		 return $paragraphs;
}



}











?>
