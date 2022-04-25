<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="{{ asset('/') }}css/style.css" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

            @include('master.includes.menu')
            @include('master.includes.header')
            <!-- /.navbar-static-side -->
        </nav>
        <div id="page-wrapper">
            @yield('body')
        </div>
    </div>
</body>

</html>