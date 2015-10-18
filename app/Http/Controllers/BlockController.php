<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BlockController extends Controller {

//create LorumIpsum Blocks
	public function getIndex() {

      return view('devtools.latinblocks')->with('name', 'San Juan Vacation');

//    $generator = new Badcow\LoremIpsum\Generator();
//    $paragraphs = $generator->getParagraphs(5);

  //  echo implode('<p>', $paragraphs);
  }
}
?>
