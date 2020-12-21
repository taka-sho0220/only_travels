<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    @isset($title)
    <title>{{ $title }} ひとりでいけるモン。</title>
    @else
    <title>ひとりでいけるモン。</title>
    @endisset

    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <link href="{{ asset('img/only.jpg') }}" rel="icon">
    <link href="{{ asset('img/only.jpg') }}" rel="only-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700&subset=latin,cyrillic-ext" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="{{ asset('css/ionicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/photostack.css') }}" rel="stylesheet">
    <link href="{{ asset('css/fullpage-menu.css')}}" rel="stylesheet">
    <link href="{{ asset('css/cubeportfolio.css') }}" rel="stylesheet">
    <link href="{{ asset('css/superslides.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet">
    <!-- Main Stylesheet File -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

</head>