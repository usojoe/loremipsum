<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExampleController extends Controller {

  public function getIndex() {

      return view('layouts.master');

  }

  public function postIndex() {

      echo "this is where the Index form is posted to";

  }

  public function getLatinBlocks() {

      return view('layouts.master');

    }

  public function postLatinBlocks() {

      echo "this is where the Latin Blocks form is posted to";

    }

  public function getRandomUsers() {

        return view('layouts.master');

  }

  public function postRandomUsers() {

      echo "this is where the Random User form is posted to";


  }



}




















?>
