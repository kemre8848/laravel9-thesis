<!DOCTYPE html>
<html lang="en">
<head>
<!-- Basic -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">

<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- Site Metas -->
<title>@yield("title")</title>
<meta name="description" content="@yield("decription")">
<meta name="keywords" content="@yield("keywords")">
<meta name="author" content="Emre">
<link rel="icon" type="image/x-icon" href="@yield("icon")">


<!-- Site Icons -->


<!-- Bootstrap CSS -->
<link rel="stylesheet" href="/assets/css/bootstrap.min.css">
<!-- Site CSS -->
<link rel="stylesheet" href="/assets/style.css">
<!-- ALL VERSION CSS -->
<link rel="stylesheet" href="/assets/css/versions.css">
<!-- Responsive CSS -->
<link rel="stylesheet" href="/assets/css/responsive.css">
<!-- Custom CSS -->
<link rel="stylesheet" href="/assets/css/custom.css">

<!-- Modernizer for Portfolio -->
<script src="assets/js/modernizer.js"></script>

<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
@yield("head")
</head>
<body class="host_version">
@include('home.header')


@section('content')
@show


@include('home.footer')
@yield('foot')
</body>
</html>
