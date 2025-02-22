<script>
    document.addEventListener("DOMContentLoaded", function() {
        var toolbar = document.querySelector('.header-toolbar-area');
        var header = document.querySelector('#header-one');
        var toolbarHeight = toolbar.offsetHeight;

        function checkScroll() {
            if (window.scrollY > toolbarHeight) {
                toolbar.classList.add('header-toolbar-hidden');
                header.style.top = 0 + 'px';
                //header.classList.add('header-fixed-top');
            } else {
                toolbar.classList.remove('header-toolbar-hidden');
                header.style.top = toolbarHeight + 'px';
                //header.classList.remove('header-fixed-top');
            }
        }

        window.addEventListener('scroll', checkScroll);

        // Set initial position of the header
        header.style.top = toolbarHeight + 'px';
    });

    /*document.addEventListener("DOMContentLoaded", function() {
        var toolbarHeight = document.querySelector('.header-toolbar-area').offsetHeight;
        document.querySelector('#header-one').style.top = toolbarHeight + 'px';
    });*/
</script>

<!-- jquery-->
<script src="{{ asset('event/assets/js/jquery-2.2.4.min.js') }}"></script>
<!-- Plugins js -->
<script src="{{ asset('event/assets/js/plugins.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('event/assets/js/popper.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('event/assets/js/bootstrap.min.js') }}"></script>
<!-- Nivo slider js -->
<script src="{{ asset('event/assets/vendor/slider/js/jquery.nivo.slider.js') }}"></script>
<script src="{{ asset('event/assets/vendor/slider/home.js') }}"></script>
<!-- Meanmenu Js -->
<script src="{{ asset('event/assets/js/jquery.meanmenu.min.js') }}"></script>
<!-- Srollup js -->
<script src="{{ asset('event/assets/js/jquery.scrollUp.min.js') }}"></script>
<!-- jquery.counterup js -->
<script src="{{ asset('event/assets/js/jquery.counterup.min.js') }}"></script>
<script src="{{ asset('event/assets/js/waypoints.min.js') }}"></script>
<!-- Countdown js -->
<script src="{{ asset('event/assets/js/jquery.countdown.min.js') }}"></script>
<!-- Isotope js -->
<script src="{{ asset('event/assets/js/isotope.pkgd.min.js') }}"></script>
<!-- Magnific Popup -->
<script src="{{ asset('event/assets/js/jquery.magnific-popup.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':

                toastr.options = {
                    "positionClass" : 'toast-top-full-width',
                    "progressBar" : true,
                    "closeButton" : true,
                    "timeOut" : 5000,
                }
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':

                toastr.options = {
                    "positionClass" : 'toast-top-full-width',
                    "progressBar" : true,
                    "closeButton" : true,
                    "timeOut" : 5000,
                }
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':

                toastr.options.timeOut = 10000;
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':

                toastr.options = {
                    "positionClass" : 'toast-top-full-width',
                    "progressBar" : true,
                    "closeButton" : true,
                    "timeOut" : 5000,
                }
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>
@section('scriptSection')

@show
<!-- Custom Js -->
<script src="{{ asset('event/assets/js/main.js') }}"></script>

