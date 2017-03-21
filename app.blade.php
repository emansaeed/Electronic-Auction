<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
    <link href="http://demo.expertphp.in/css/jquery.ui.autocomplete.css" rel="stylesheet">
    <script src="http://demo.expertphp.in/js/jquery.js"></script>
    <script src="http://demo.expertphp.in/js/jquery-ui.min.js"></script>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>

	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

    <title>{{ config('app.name', 'SOLE') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
<meta name="_token" content="{!! csrf_token() !!}"/>
    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body style="background-image:url(img/d.jpg)">
    <div id="app" >
        <nav class="navbar navbar-default navbar-static-top" style="background-image:url(img/ww.jpg);box-shadow: 10px 10px 5px #888888">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>


					 

					
					 <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'SOLE') }}
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
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
							 <a class="navbar-brand" style="font-size:16px ; color:#000000"href="{{route('chat') }}">chat</a>

                      <a class="navbar-brand" style="font-size:16px ; color:#000000"href="{{route('product') }}">Product</a>
				      <a class="navbar-brand" style="font-size:16px ; color:#000000" href="{{route('home') }}">Profile</a></li>
					  <form style="margin-left:410px;margin-top:20px">
				 <button class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span>search</button>
			  <input  placeholder="member ,auction "style="width:520px ; border-radius:5px ; "></input>
			  </form>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                          
						  <li><a class="navbar-brand" value ="Account" style="font-size:14px ; color:#000000" href="{{route('account') }}">Account</a></li>

										<li>
									
                                        <a style="font-size:16px ; color:#000000 ; margin-top:-2px" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
									

                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<script src="//code.jquery.com/jquery-1.12.0.min.js"></script>
<script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

<script type="text/javascript">
$.ajaxSetup({
   headers: { 'X-CSRF-Token' : $('meta[name=_token]').attr('content') }
});
</script>

   <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
