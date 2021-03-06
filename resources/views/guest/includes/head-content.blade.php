    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> {{Request::is('/') ? 'Home' : ''}}
            {{Request::is('about') ? 'About' : ''}}
            {{Request::is('services') ? 'Services' : ''}}
            {{Request::is('news') ? 'News' : ''}}
            {{Request::is('contact') ? 'Contact' : ''}}
            {{Request::is('faqs') ? 'FAQs' : ''}} | Hospital </title>
   <link rel="icon" href="{{ asset('medicre/img/favicon.png') }}" type="image/x-icon"/>
    <!-- google fonts lato -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!-- google fonts pt-Sans -->
    <link href="https://fonts.googleapis.com/css?family=PT+Sans:400,400i,700" rel="stylesheet">
    <!-- bootstrap -->
    <link rel="stylesheet" href="{{ asset('medicre/css/bootstrap.min.css') }}">
    <!-- font-awesome -->
    <link rel="stylesheet" href="{{ asset('medicre/css/font-awesome.min.css') }}">
    <!-- animate css -->
    <link rel="stylesheet" href="{{ asset('medicre/css/animate.min.css') }}">
    <!-- slider custom effects -->
    <link rel="stylesheet" href="{{ asset('medicre/css/myslider.css') }}">
    <!-- magnific-popup -->
    <link rel="stylesheet" href="{{ asset('medicre/css/magnific-popup.css') }}">
    <!-- slick css -->
    <link rel="stylesheet" href="{{ asset('medicre/css/slick.css') }}">
    <!-- reset css -->
    <link rel="stylesheet" href="{{ asset('medicre/css/reset.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('medicre/style.css') }}">
    <!-- responsive css -->
    <link rel="stylesheet" href="{{ asset('medicre/css/responsive.css') }}">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
