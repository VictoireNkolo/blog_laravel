<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>
        @yield('title', 'Home page')
    </title>
    <!-- Bootstrap core CSS-->
    <link href="{{ asset('css/plugin.css') }}" rel="stylesheet">
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template-->

</head>

<body class="fixed-nav sticky-footer bg-dark">

<div id="loader" class="lds-ring"><div></div><div></div><div></div><div></div></div>

@include('partials.sidebar')

<div class="content-wrapper" id="app">
    <div class="container-fluid">

        @yield('content')

    </div>
    <!-- /.container-fluid-->

    @include('partials.footer')

</div>


<!--script src="{{--  mix('js/admin.js')  --}}"></script-->
<script src="{{  mix('js/app.js')  }}"></script>

</body>

</html>
