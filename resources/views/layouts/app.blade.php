<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>


    <!--  font awesome  -->
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <!-- drawer.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/css/drawer.min.css" media="screen and (max-width:767px)">
    <!-- jquery & iScroll -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/iScroll/5.2.0/iscroll.min.js"></script>
    <!-- drawer.js -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/drawer/3.2.2/js/drawer.min.js"></script>
    <!-- wow -->
    <script src="/js/wow.min.js"></script>
    <link rel="stylesheet" href="css/animate.css">
    <!-- original -->
    <link rel="stylesheet" href="{{ asset('asset/css/style.css') }}">
    <script src="/resources/js/script.js"></script>
    <!--  reset css  -->
    <link rel="stylesheet" href="{{ asset('asset/css/reset.css') }}">

</head>

@include('commons.header')
<main>
    @yield('content')
</main>
@include('commons.footer')
</body>

</html>
