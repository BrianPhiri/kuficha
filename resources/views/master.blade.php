<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kuficha</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    
    <link href="{{ mix('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="padding: 20px; margin-bottom:10px;">
            <a href="/" class="navbar-brand">{{ Auth::user()->name }}'s Kuficha</a>
            <li style="float: right;">
                <a href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                    Logout
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </li>
        </nav>
        @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ mix('js/bootquery.min.js') }}"></script>
    
</body>
</html>