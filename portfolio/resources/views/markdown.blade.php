<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="/js/libs/jquery-1.9.1.min.js"></script>

    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div id="app">
    <div class="container">
        {{--<header class="page-header">--}}
        <h2><span class="glyphicon glyphicon-file" aria-hidden="true">Markdown Viewer</span></h2>
        {{--</header>--}}

        <div class="row">
            <div class="col-md-3 sider">
                {{--<aside>--}}
                {{--{!! $index !!}--}}
                {{--</aside>--}}
            </div>
            <div class="col-md-9 content">
                <aside>
                    {!! $content !!}
                </aside>
            </div>
        </div>
    </div>
</div>
<script src="/js/app.js"></script>
</body>