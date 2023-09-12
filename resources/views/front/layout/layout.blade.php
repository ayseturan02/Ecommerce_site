<!DOCTYPE html>
<html lang="en">
<head>
    <title>e-ticaret şablonu</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{asset("front/fonts/icomoon/style.css")}}">

    <link rel="stylesheet" href="{{asset("front/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("front/css/magnific-popup.css")}}">
    <link rel="stylesheet" href="{{asset("front/css/jquery-ui.css")}}">
    <link rel="stylesheet" href="{{asset("front/css/owl.carousel.min.css")}}">
    <link rel="stylesheet" href="{{asset("front/css/owl.theme.default.min.css")}}">

    <link rel="stylesheet" href="{{asset("front/css/aos.css")}}">
@yield("customjs")
    <link rel="stylesheet" href="{{asset("front/css/style.css")}}">

</head>
<body>

<div class="site-wrap">

    @include("front.inc.header")

    @yield("content")

    @include("front.inc.footer")
</div>

<script src="{{asset("front/js/jquery-3.3.1.min.js")}}"></script>
<script src="{{asset("front/js/jquery-ui.js")}}"></script>
<script src="{{asset("front/js/popper.min.js")}}"></script>
<script src="{{asset("front/bootstrap.min.js")}}"></script>
<script src="{{asset("front/js/owl.carousel.min.js")}}"></script>
<script src="{{asset("front/js/jquery.magnific-popup.min.js")}}"></script>
<script src="{{asset("front/js/aos.js")}}"></script>

<script src="{{asset("front/js/main.js")}}"></script>

</body>
</html>
