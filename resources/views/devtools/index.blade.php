@extends('layouts.master')
<!--                           -->
@section('title')
<div class="container">
<h1>Developer's Best Friend</h1>
</div>
@stop

@section('head')

@stop

@section('content1')

<header>
<img
    src='images/hipsterlogo.png'
    alt='Loremipsum Logo'>
</header>

<h2>Lorem Ipsum Generator</h2>
<p>Create random text to populate your database.</p>

@if($errors->get('title'))
<ul>
  @foreach ($errors->get('title') as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
      @endif

    <form id="block_generator" method="POST" action="devtoolsfaker">

            <input type="hidden" name="_token" value='{{ csrf_token() }}'>

            Blocks of Text to Generate: <input type="number" name="blocks" min="1" max="10">

            <input class="btn btn-primary" type="submit" name="submitbutton" value="Submit">

    </form>

@stop
@section('content2')
<br>
            <h2>Random User Generator</h2>
            <p>Create random users to populate your database.</p>

            @if($errors->get('title'))
            <ul>
              @foreach ($errors->get('title') as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                  @endif

    <form id="user_generator" method="POST" action="devtools">

          <input type="hidden" name="_token" value='{{ csrf_token() }}'>
<br>
          <label for='numberofusers'>How many user profiles do you want to generate?</label>
          <input type="number" name="numberofusers" min='1' max='100'>

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
            <input type="submit" class="btn btn-primary" name="submitbutton" value="Create Users">

      </form>

@stop


@section('body')



@stop
