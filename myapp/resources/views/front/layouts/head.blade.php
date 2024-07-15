<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<meta name="description" content="Solutions évènementielles sur mesure, ciblant toutes les catégories socioprofessionnelles">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('event/assets/img/logo.png') }}">
<!-- Normalize CSS -->
<link rel="stylesheet" href="{{ asset('event/assets/css/normalize.css') }}">
<!-- Main CSS -->
<link rel="stylesheet" href="{{ asset('event/assets/css/main.css') }}">
<!-- Bootstrap CSS -->
<link rel="stylesheet" href="{{ asset('event/assets/css/bootstrap.min.css') }}">
<!-- Animate CSS -->
<link rel="stylesheet" href="{{ asset('event/assets/css/animate.min.css') }}">
<!-- Font-awesome CSS-->
<link rel="stylesheet" href="{{ asset('event/assets/css/font-awesome.min.css') }}">
<!-- Main Menu CSS -->
<link rel="stylesheet" href="{{ asset('event/assets/css/meanmenu.min.css') }}">
<!-- Magnific CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('event/assets/css/magnific-popup.css') }}">
<!-- Style Page CSS -->
<link rel="stylesheet" type="text/css" href="{{ asset('event/assets/css/style.css') }}">
<!-- nivo slider CSS -->
<link rel="stylesheet" href="{{ asset('event/assets/vendor/slider/css/nivo-slider.css') }}" type="text/css">
<link rel="stylesheet" href="{{ asset('event/assets/vendor/slider/css/preview.css') }}" type="text/css" media="screen">
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('event/assets/style.css') }}">
<!-- Modernizr Js -->
<script src="{{ asset('event/assets/js/modernizr-2.8.3.min.js') }}"></script>

<style type="text/css">
    .footer-contact-us ul li {
        position: relative;
        padding-left: 35px;
        font-size: 18px;
        margin-bottom: 20px;
        line-height: 1.6;
    }

    .footer-contact-us ul li:last-child {
        margin-bottom: 0;
    }

    .footer-contact-us ul li i {
        position: absolute;
        left: 0;
        top: 5px;
        z-index: 1;
        color: #fad03b;
        font-size: 20px;
    }  

    .header-toolbar-area {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #f2f2f2;
        padding-right: 15px;
        padding-left: 15px;
    }

    @media (max-width: 991px) {
        .header-toolbar-area {
            display: none;
        }
    }  

    .header-toolbar-area .nav {
        list-style: none;
        margin: 0;
        display: flex;
        color: #000;
        font-weight: 700;
    }

    .header-toolbar-area a {
        font-size: 16px;
        font-weight: 300;
    }

    .header-toolbar-hidden {
        display: none;
    }

    .left-nav {
        justify-content: flex-start;
        padding: 0 0 0 39px
    }

    .social-icons {
        justify-content: center;
        flex-grow: 1;
        text-align: center;
    }

    .social-icons li {
        background-color: #fad03b;
        --icon-padding: 0.3em;
        width: 27.6px;
        height: 27.6px;
        margin-right: 15px;
    }

    .social-icons li i { 
        color: #000000;
        width: 1em;
        height: 1em;
        position: relative;
        font-size: 18px;
    }

    .right-nav {
        justify-content: flex-end;
    }

    .nav-item {
        /*margin-right: 15px;*/
        margin-right: calc(13px / 2);
        margin-left: calc(13px / 2);
    }

    .nav-item a {
        text-decoration: none;
        color: inherit;
    }

    .nav-item i {
        color: #fad03b;
        transition: color 0.3s;
    }

    .header-toolbar-area li .icon-list-text {
        align-self: center;
        padding-left: 5px;
    }

    .lang {
        margin-left: auto;
    } 
</style>

@section('headSection')

@show