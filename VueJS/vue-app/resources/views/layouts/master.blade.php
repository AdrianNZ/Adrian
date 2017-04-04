<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Vue Project</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="/css/app.css">

    <!-- Token -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>
<div id="app">

    @include('layouts.nav')

    <div id="wrapper">

        @include('layouts.sidebar')

        @include('layouts.content')

    </div>
    <!-- /#wrapper -->
</div>
<script src="/js/app.js"></script>
<script src="/js/master.js"></script>
</body>
</html>
