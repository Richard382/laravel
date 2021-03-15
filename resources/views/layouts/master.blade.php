<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="{{asset('Kompleet/assets/img/ico/favicon.ico')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('Kompleet/assets/img/ico/apple-touch-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('kompleet/assets/img/ico/apple-touch-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('Kompleet/assets/img/ico/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" href="{{asset('Kompleet/assets/img/ico/apple-touch-icon-57x57.png')}}">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{asset('Kompleet/assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Kompleet/assets/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('Kompleet/assets/css/plugins.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{asset('Kompleet/assets/css/style.css')}}" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{asset('Kompleet/assets/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('Kompleet/assets/css/pe-icons.css')}}" rel="stylesheet">
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
</head>

<body id="page-top" class="index">

    <div class="master-wrapper">

        <div class="preloader">
            <div class="preloader-img">
                <span class="loading-animation animate-flicker"><img src="{{asset('Kompleet/assets/img/loading.GIF')}}" alt="loading"/></span>
            </div>
        </div>

        <!-- Navigation -->
    @include('includes.navbar')
        <div id="search-wrapper">
            <button type="button" class="close">×</button>
            <div class="vertical-center text-center">
                <form>
                    <input type="search" value="" placeholder="Enter Search Term" />
                    <button type="submit" class="btn btn-primary btn-white">Search</button>
                </form>
            </div>
        </div>

        <!-- Header -->
        @yield('header')

       @yield('content')

        @include('includes.footer')

