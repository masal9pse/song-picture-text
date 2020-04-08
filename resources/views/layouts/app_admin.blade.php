<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">

 <!-- CSRF Token -->
 <meta name="csrf-token" content="{{ csrf_token() }}">

 <title>{{ config('app.name', 'Laravel') }}</title>

 <!-- Styles -->
 <link href="{{ asset('css/app.css') }}" rel="stylesheet">
 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
  integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
  integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
 <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
  integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
 <style>
  body {
   background-color: tomato;
  }
 </style>
</head>

<body>
 <div id="app">
  <nav class="navbar navbar-default navbar-static-top">
   <div class="container">
    <div class="navbar-header">

     <!-- Collapsed Hamburger -->
     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse"
      aria-expanded="false">
      <span class="sr-only">Toggle Navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
     </button>

     <!-- Branding Image -->
     <a class="navbar-brand" href="{{ url('/') }}">
      {{-- {{ config('app.name', 'Laravel') }} --}}
      歌詞共有サイト
     </a>
    </div>

    <div class="collapse navbar-collapse" id="app-navbar-collapse">
     <!-- Left Side Of Navbar -->
     <ul class="nav navbar-nav">
      &nbsp;
     </ul>

     <!-- Right Side Of Navbar -->
     <ul class="nav navbar-nav navbar-right">
      <!-- Authentication Links -->
      @guest
      <li><a href="{{ route('admin.login') }}">Login</a></li>
      @else
      <li class="dropdown">
       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"
        aria-haspopup="true" v-pre>
        {{ Auth::user()->name }} <span class="caret"></span>
       </a>

       <ul class="dropdown-menu">
        <li>
         <a href="{{ route('admin.logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">
          Logout
         </a>

         <form id="logout-form" action="{{ route('admin.logout') }}" method="POST" style="display: none;">
          {{ csrf_field() }}
         </form>
        </li>
       </ul>
      </li>
      @endguest
     </ul>
    </div>
   </div>
  </nav>

  @yield('content')
 </div>

 <!-- Scripts -->
 <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>