<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TODO LIST</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('/') }}admin/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
  
    <!-- Custom CSS -->
    <link href="{{ asset('/') }}admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->

    <!-- Custom Fonts -->
    <link href="{{ asset('/') }}admin/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>


<body>

<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
     
        @include('master.includes.menu')
        @include('master.includes.header')
        <!-- /.navbar-static-side -->
    </nav>
    <div id="page-wrapper">
        @yield('body')
    </div>
<!-- /#wrapper -->
</div>
<!-- jQuery -->
<script src="{{ asset('/') }}admin/vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/') }}admin/vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->

<!-- Morris Charts JavaScript -->
<script src="{{ asset('/') }}admin/vendor/morrisjs/morris.min.js"></script>
<script src="{{ asset('/') }}admin/data/morris-data.js"></script>

<!-- Custom Theme JavaScript -->
<script src="{{ asset('/') }}admin/dist/js/sb-admin-2.js"></script>

    <script>
        $(document).ready(function(){
            $('#xyz').click(function(){
                $(this).text('');
            });
        });
    </script>
<script>
    initSample();
</script>
</body>

</html>
