<!doctype html>
<html>
<head>

  <title>
    @yield('title')
  </title>

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @yield('meta')

  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" />
  <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" rel="stylesheet">
  
  @yield('css')

  <style>
    body { padding-top: 70px; }
  </style>

</head>

<body>
  
  @include('templates.navbar')
  
  <div id="wrap">
    <div class="container clear-top">
      @yield('content')
    </div>
    <div id="push"></div>
  </div>
  
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

  @yield('javascript')
  
</body>
</html>
