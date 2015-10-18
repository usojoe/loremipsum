@extends('layouts.master')
<!--                           -->
@section('title')

<h1>Tools of the Trade</h1>

@stop

@section('head')

@stop

@section('content')

<header>
<img
    src='images/hipsterlogo.png'
    alt='Loremipsum Logo'>
</header>

<h2>Lorem Ipsum Generator</h2>
<p>Create random text to populate your database.</p>

    <form method="POST" action="/devtools">

            <input type="hidden" name="_token" value='{{ csrf_token() }}'>

            Blocks of Text to Generate: <input type="number" name="blocks" min="1" max="10">

            <input class="submit" type="submit" name="submitbutton" value="blocks">

    </form>

<br>
            <h2>Random User Generator</h2>
            <p>Create random users to populate your database.</p>

    <form method="POST" action="/devtools">
            <input type="hidden" name="_token" value='{{ csrf_token() }}'>
<br>
          <label for='user'>How many user profiles do you want to generate?</label>
          <input type="number" name="numberofuser" min='1' max='100'>
<br>
          <label for='image'>Do you want images?</label>
            <input type="checkbox" name="image">
<br>
          <label for="profile">Profile Description</label>
            <input type="checkbox" name="profile">
<br>
            <label for='birthday'>Display birthdays?</label>
            <input type="checkbox" name="birthday">
<br>
            <label for='streetaddress'>Street Address?</label>
            <input type="checkbox" name="streetaddress">
<br>
            <input class="button" type="submit" name="submitbutton" value="generate">

      </form>

@stop

@section('body')

@stop
