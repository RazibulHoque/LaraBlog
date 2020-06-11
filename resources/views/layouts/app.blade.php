<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LaraBlog</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')
    <div class="container">
      @if(Request::is('/'))
       @include('inc.showcase')
      @endif
      <div class="row">
        <div class="col-md-8 col-lg-8">
          @include('inc.messages')
        @yield('content')
        </div>
      </div>
    </div>
    <footer id="footer" class="text-center">
      <p>Copyright &copy;</p>
    </footer>
  </body>
</html>
