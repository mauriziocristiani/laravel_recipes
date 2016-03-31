<!DOCTYPE html>

<html>
    <head>
        <title>Laravel - @yield('title')</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

</head>

<body>

<div class="navbar">
@section('navbar') 
 Barra di navigazione
 @show
</div>      

<div class="container">
@yield('content')     
</div>      


</body>
</html>