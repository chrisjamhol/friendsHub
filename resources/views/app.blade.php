<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
<head>
    <title>Friends Hub</title>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->

    <link href="{{ elixir('css/app.css') }}" rel="stylesheet">
</head>
<body>

<div id="header" class="skel-layers-fixed">
    @yield('menu')
</div>

<!-- Main -->
<div id="main">
    @yield('content')
</div>

<!-- Footer -->
<div id="footer">
    @yield('footer')
</div>

<script src="{{ elixir('js/app.js') }}"></script>

</body>
</html>