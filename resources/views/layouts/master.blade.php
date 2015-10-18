<!doctype html>
<html>
<head>
    <title>

        @yield('title','Yeilded Master Tools of the Trade')

    </title>

    <meta charset='utf-8'>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    <link href="css/bootstrap.css" rel="stylesheet" type="css">


    @yield('head')

</head>

<body>

  <div class="container">

    @yield('content')

       </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <footer class='container'>
    <p>&copy; Photographic &amp; Communication Services, {{ date('Y') }} <p>
    </footer>

    @yield('body')


          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

          <script src="js/bootstrap.min.js"></script>
</body>
</html>
