<!doctype html>
<html>
<head>

    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" type="css">

    @yield('title')
    @yield('head')

</head>

<body>

  <div class="container">

    @yield('content1')
    @yield('displaylorem')
    @yield('content2')
    @yield('displayusers')


    <footer id="moveright">
    <p>&copy; Photographic &amp; Communication Services, {{ date('Y') }}    <p>
    </footer>

       </div>
<br>

    @yield('body')

          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

          <script src="js/bootstrap.min.js"></script>
</body>
</html>
