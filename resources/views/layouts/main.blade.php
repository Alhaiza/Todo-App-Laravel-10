<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Judul Halaman</title>
    @include('components.css')
</head>

<body class="">
    @include('components.header')


    @yield('container')



    @include('components.footer')

    @include('components.js')
</body>

</html>
