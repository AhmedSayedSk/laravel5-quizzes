<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'Quizzes') }}</title>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="{{asset('css/customstyle.css')}}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ asset('css/vue-style.css') }}" type="text/css">
        <script type="text/javascript">
            window.csrf_token = "{{ csrf_token() }}";
        </script>
    </head>
    <body>
        <div id="app">

        </div>
        <script src="{{ asset('js/customapp.js') }}"></script>
        <script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.3'><\/script>".replace("HOST", location.hostname));
//]]></script>

    </body>
</html>

