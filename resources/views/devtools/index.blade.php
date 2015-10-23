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

    <form id="lorem_generator" method="POST" action="devtoolsfaker">

            <input type="hidden" name="_token" value='{{ csrf_token() }}'>

            Number of Lorem Ipsum Sentences: <input type="number" name="paragraphs" min="1" max="1000">

            <input class="btn btn-primary" type="submit" name="loremsubmitbutton" value="Submit Request">

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
          <label for='numberofusers'>How many user profiles?</label>
          <input type="number" name="numberofusers" min='1' max='100'>
          <input type="submit" class="btn btn-primary" name="usersubmitbutton" value="Submit Request">
          <br><label>(Please allow 20 seconds for the users to generate)</label><br><br><br>
                      <label>Extra Features:</label><br>
                      <label for='birthday'>Display birthdays?</label>
                      <input type="checkbox" name="birthday">
          <br>
          <br>

      </form>

@stop


@section('body')



@stop
