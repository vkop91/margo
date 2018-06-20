<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Blog</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
    </style>
</head>
<body>
<!-- Header blocks -->
<header>
    @include('blog.partials.header')
</header>

<!-- Content blocks -->
<section>
    @include('blog.partials.sidebar')
    @include('blog.partials.blocks')
    <h1>Title</h1>
    @include('blog.partials.bread_crumbs')
    @yield('content')
</section>

<!-- Footer blocks -->
<footer>
    @include('blog.partials.footer')
</footer>

</body>
</html>
