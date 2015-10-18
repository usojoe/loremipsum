@extends('layouts.master')


@section('title')
  Tools of the Trade
@stop

{{--
This `head` section will be yielded right before the closing </head> tag.
Use it to add specific things that *this* View needs in the head,
such as a page specific styesheets.
--}}

@section('head')

@stop

@section('content')

<h1> This is a test header</h1>

<!--
    <form>

            <input type="hidden" name="_token" value='{{ csrf_token() }}'>

            Blocks of Text to Generate: <input type="number" name="blocks" min="1" max="10">

            <input class="button" type="submit" name="submitbutton" value="printblocks">

          </form>

<br>
            <h2>Random User Generator</h2>
            <p>Create random users to populate your database.</p>


    <form>
            <input type="hidden" name="_token" value='{{ csrf_token() }}'>
<br>
          <label for='randomuser'>How many user profiles do you want to generate?</label>
          <input type="number" name="randomuser" min='1' max='10'>
<br>
          <label for='image'>Do you want images?</label>
            <input type="checkbox" name="image"
<br>
          <label for="profile">Profile Description</label>
            <input type="checkbox" name="profile"
<br>
            <label for='birthday'>Display birthdays?</label>
            <input type="checkbox" name="birthday"
<br>
            <label for='streetaddress'>Street Address?</label>
            <input type="checkbox" name="streetaddress"
<br>
            <input class="button" type="submit" name="submitbutton" value="generate">

            </form>
--->

@stop


{{--
This `body` section will be yielded right before the closing </body> tag.
Use it to add specific things that *this* View needs at the end of the body,
such as a page specific JavaScript files.
--}}
@section('body')

@stop
