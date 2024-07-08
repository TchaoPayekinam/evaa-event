<!doctype html>
<html class="no-js" lang="">

    <head>
        @include('front.layouts.head')
        <title>@yield('title', 'Eva\'a Event & Com')</title>
    </head>

    <body>
        <!-- Add your site or application content here -->
        <!-- Preloader Start Here -->
        <div id="preloader" class="preloader">
            <div class="items">
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
                <div class="item"></div>
            </div>
        </div>
        <!-- Preloader End Here -->
        <div id="wrapper" class="wrapper">
            <!-- Header Area Start Here -->
            @include('front.layouts.header') 
            <!-- Header Area End Here -->          
            @section('content')

                @show
            <!-- Footer Area Start Here -->
            @include('front.layouts.footer')
            <!-- Footer Area End Here -->
        </div>
        <!-- Wrapper End -->
        @include('front.layouts.scripts')
        <script>
            document.addEventListener("DOMContentLoaded", function() {
                var siteLogoUrl = "{{ asset('event/assets/img/logo.png') }}";
                var siteLogoHtml = "<div class='mobile-menu-nav-back'><a href='{{ route('home.index') }}'><img style='height: 46px; width: 179px' src='" + siteLogoUrl + "'/></a></div>";

                $('nav#dropdown').meanmenu({
                    siteLogo: siteLogoHtml
                });
            });
        </script>                
    </body>

</html>
