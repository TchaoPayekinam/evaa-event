<!-- bundle -->
<script src="{{ asset('template_admin/assets/js/vendor.min.js') }}"></script>
<script src="{{ asset('template_admin/assets/js/app.min.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<script>
    @if (Session::has('message'))
        var type = "{{ Session::get('alert-type', 'info') }}"
        switch (type) {
            case 'info':

                /*toastr.options = {
                    "positionClass" : 'toast-top-full-width',
                    "progressBar" : true,
                    "closeButton" : true,
                    "timeOut" : 3000,
                }*/
                toastr.options.timeOut = 5000;
                toastr.info("{{ Session::get('message') }}");
                break;
            case 'success':

                /*toastr.options = {
                    "positionClass" : 'toast-top-full-width',
                    "progressBar" : true,
                    "closeButton" : true,
                    "timeOut" : 3000,
                }*/
                toastr.options.timeOut = 5000;
                toastr.success("{{ Session::get('message') }}");
                break;
            case 'warning':

                toastr.options.timeOut = 5000;
                toastr.warning("{{ Session::get('message') }}");
                break;
            case 'error':

                /*toastr.options = {
                    "positionClass" : 'toast-top-full-width',
                    "progressBar" : true,
                    "closeButton" : true,
                    "timeOut" : 3000,
                }*/
                toastr.options.timeOut = 5000;
                toastr.error("{{ Session::get('message') }}");
                break;
        }
    @endif
</script>

@section('scriptSection')

@show