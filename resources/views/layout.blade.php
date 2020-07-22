<html>
    <head>
        <title>Page Name - @yield('title')</title>
       @section('head')
       <meta name="csrf-token" content="{{ csrf_token() }}">
       <script src="{{asset('js/app.js')}}"></script>
       <link rel="stylesheet" href="{{asset('css/app.css')}}">
       @show
    </head>
    <script>
        $(document).ready(function(){
            console.warn("echo code");
        })
    </script>
    <body>
        @section('header')
        <div class="header">
            <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                <!-- Brand -->
                <a class="navbar-brand" href="#">Navbar</a>

                <!-- Toggler/collapsibe Button -->
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <!-- Navbar links -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                  <ul class="navbar-nav">
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Link</a>
                    </li>
                  </ul>
                </div>
              </nav>
        </div>
        @show
         {{-- <div class="content">
             @yield('content')
         </div>

        @section('footer')
        <div class="footer">
            <h1>Footer Part</h1>
        </div>
        @show --}}

    </body>
</html>
