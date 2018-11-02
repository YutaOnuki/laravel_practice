<!-- about.blade.php -->

<!DOCTYPE HTML>
<html>
<head>
    <title>About</title>
</head>
<body>
    @extends('layout')

    @section('about')
    {{-- ダブルカーリーを使うように修正--}}
    <h1>About Me: {{$first_name}} {{$last_name}}</h1>
    @endsection
</body>
</html>
