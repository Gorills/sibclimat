<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @yield('meta')

    <link rel="stylesheet" href="{{ URL::asset('css/site.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap&subset=cyrillic" rel="stylesheet">

{{-- NOT META! --}}


</head>
<body>




@yield('content')




<style src="{{ URL::asset('js/app.js') }}"></style>
</body>
</html>
