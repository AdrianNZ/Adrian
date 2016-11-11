<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <script src="js/jQuery-1.12.4/jquery-1.12.4.min.js"></script>
    <link href="js/bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/master.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="fontello/css/fontello.css" />
    <script src="js/index.js"></script>
</head>



<body>

@yield('body')
<!-- container2 end-->
<div class="clearfix"></div>
<!-- FOOTER -->
@include('layouts.footer')

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jQuery-1.12.4/jquery-1.12.4.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>

</html>
