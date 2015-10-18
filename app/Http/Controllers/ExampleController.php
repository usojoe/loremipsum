<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class ExampleController extends Controller {

  public function getIndex() {

      return view('layouts.example');

  }

  public function postIndex() {

      echo "this is where the form is posted to";

  }

}




















?>
