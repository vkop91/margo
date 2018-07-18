<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Bootstrap core CSS -->
    <link href="/blog/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="/blog/css/blog-post.css" rel="stylesheet" type="text/css">
</head>
<body>
<!-- Header -->
<header>
    @include('base.partials.header')
</header>

<!-- Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4">@yield('title')</h1>

            <hr>

            @include('base.partials.bread-crumbs')

            @yield('content')

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">
            @include('base.partials.sidebar')
        </div>

    </div>

</div>

<!-- Footer -->
<footer class="py-5 bg-dark">
    @include('base.partials.footer')
</footer>

@include('base.partials.footer-scripts')

</body>
</html>
