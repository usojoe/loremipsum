<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LipsumController extends Controller {

//create LorumIpsum Blocks
	public function getBlock() {

      return view('devtools.blocks');

		}

	public function postBlock() {

			return "this sting of text.";

		}

//    $generator = new Badcow\LoremIpsum\Generator();
//    $paragraphs = $generator->getParagraphs(5);

  //  echo implode('<p>', $paragraphs);
}















?>
