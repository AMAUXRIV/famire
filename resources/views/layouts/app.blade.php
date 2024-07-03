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
    @yield('ext_css')
    <style>
    .page-header {
        margin-top: 0px;
    }
    body {
        background-image: url('https://images.pexels.com/photos/1031641/pexels-photo-1031641.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .navbar{
        background-color: #eeeee4;
    }
    .navbar .nav-link{
        color: #32CD32;
    }
    .auth-container {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            background-color: #eeeee4;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            padding: 20px;
            margin-top: 50px;
        }
    .auth-image {
        width: 100%;
        height: auto;
    }

    .login-header {
        font-size: 24px;
        font-weight: bold;
    }

    .auth-btn {
        background-color: #32CD32;
        border-color: #32CD32;
    }

    .auth-btn:hover {
        background-color: #28a745;
        border-color: #28a745;
    }

    .form-control.is-invalid {
        border-color: #dc3545;
    }

    .invalid-feedback {
        display: block;
    }
</style>

    
</head>
<body>
    <div id="app">
        @include('layouts.partials.nav')

        <div class="container">
        @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    @yield('ext_js')
    @yield('script')
    <script>
        var header = $('h2.page-header').contents();
        str = '';
        mainText = header.filter(function () {
                // return type of text
                return this.nodeType === 3;
            })[0];
        str += mainText.data.trim();

        if (mainText.nextSibling) {
            // next siblings should be a small tag text
            str += " - "+mainText.nextSibling.innerText;
        }
        $('title').prepend(str+" - ");
    </script>
</body>
</html>
