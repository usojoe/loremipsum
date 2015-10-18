<html>
​
<body>
  <h1>This here is the example view</h1>

  @if($errors->get('title'))
  <ul>
    @foreach ($errors->get('title') as $error)
          <li>{{ $error }}</li>
          @endforeach
        </ul>
        @endif

<form method="POST" action="/example">

<input type="hidden" name="_token" value='{{ csrf_token() }}'>

<input type="text" name="name" value="">
<input type="text" name="favoritegum" value="">
<input type="submit" name="submit" value="submit">

</form>

</body>
</html>
