
<!doctype html>
<html lang="en">
  <head>

    <title>Example</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">

    <link href="/css/album.css" rel="stylesheet">
  </head>

  <body>

      @include ('layouts.nav')

      <div class="container">

        @yield('content')

      </div>

      @include ('layouts.footer')

  </body>
</html>
