<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- TITLE -->
    <title>DRDSNHS Official Website</title>

    <!-- CSS & OTHER STYLING -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    @yield('css')

    <link rel="stylesheet" href="{{ asset('css/front.css') }}">
    <link rel="stylesheet" href="{{ asset('css/f-two.css') }}">


</head>

<body>

    <!-- END OF HEADER -->
        @include('layout.nav')
    <!-- END OF HEADER -->

    <!-- BODY GOES HERE-->

    @yield('content')

    <!-- END OF BODY -->

</body>

@yield('bottom')

</html>