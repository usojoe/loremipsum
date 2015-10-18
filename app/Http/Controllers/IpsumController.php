<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class LipsumController extends Controller {

//create LorumIpsum Blocks

	public function postBlock() {

			$oneshortblock = new Lipsum::short()->text(1);
			$twoshortblocks = new Lipsum::short()->text(2);
			$threeshortblocks = new Lipsum::short()->text(3);
			$fourshortblocks = new Lipsum::short()->text(4);
			$fourshortblocks = new Lipsum::short()->text(5);

		}

//    $generator = new Badcow\LoremIpsum\Generator();
//    $paragraphs = $generator->getParagraphs(5);

  //  echo implode('<p>', $paragraphs);
}















?>
