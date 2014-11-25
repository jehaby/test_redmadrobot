<!DOCTYPE html>
<html>

<head lang="en">
    <meta charset="UTF-8">
    @section('head')
        {{--<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>--}}
        {{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
    @show
</head>

<body>
<div class="container">

    @yield('content')

</div>
</body>
</html>



