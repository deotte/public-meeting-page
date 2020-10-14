<html>
    <head>
      <link rel="stylesheet" href="{{ mix('css/app.css') }}"/>
    </head>

    <nav>
      <div class="nav-header">
        <a href="/meetings">Meetable</a>
      </div>
      <div class="nav-user">
        @auth
          <p>Welcome, {{ Auth::user()->name }}</p>
        @endauth
      </div>
    </nav>

    <body>
        @yield('content') 
    </body>
</html>
