<html>
​
<body>
  <h1>This is the example view</h1>

<form method="POST" action="/example">

<input type="hidden" name="_token" value='{{ csrf_token() }}'>

<input type="text" name="name" value="">
<input type="text" name="favoritegum" value="">
<input type="submit" name="submit" value="submit">

</form>

</body>
</html>
