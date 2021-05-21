

<!DOCTYPE html>

<html lang="en">

  <head>

    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">

    <meta name="description" content="">

    <meta name="author" content="">

    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>EVENT SUPERBILL</title>

    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" type="image/x-icon"/>

    @include('style.style')

  </head>

  <body>

    @yield('content')

  <footer id="footer">
    <center> &copy; {{ date('Y') }} Pegasus Consultants Ltd</center>
  </footer>
  <br>

    @include('script.script')
    @yield('bottom-js')
  </body>

</html>