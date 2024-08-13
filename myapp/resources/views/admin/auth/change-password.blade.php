<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Change Password | Eva\'a Event & Com Administration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Solutions évènementielles sur mesure, ciblant toutes les catégories socioprofessionnelles" name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('event/assets/img/logo.png') }}">

        <!-- App css -->
        <link href="{{ asset('template_admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template_admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ asset('template_admin/assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />

        <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet">
    </head>

    <body class="loading authentication-bg" data-layout-config='{"leftSideBarTheme":"dark","layoutBoxed":false, "leftSidebarCondensed":false, "leftSidebarScrollable":false,"darkMode":false, "showRightSidebarOnStart": true}'>
        <div class="account-pages mt-5 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card">

                            <!-- Logo bg-primary-->
                            <div class="card-header pt-4 pb-2 text-center " style="border-bottom: 3px solid RGB(181, 5, 103)">
                                <a href="">
                                    <span><img src="{{ asset('event/assets/img/logo.png') }}" alt="" height="50"></span>
                                </a>
                            </div>

                            <div class="card-body p-4">
                                
                                <div class="text-center w-75 m-auto">
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Changer de mot de passe</h4>
                                    <p class="text-muted mb-4"> Changer le mot de passe pour votre première connexion.</p>
                                </div>

                                @if (session('error'))
                                    <div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                        {{ session('error') }}
                                    </div>
                                @endif


                                <form class="form-horizontal" method="POST" action="{{ route('password.post_changed') }}">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="password">Mot de passe Actuel</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="current_password" name="current_password" class="form-control" placeholder="Entrez le Mot de passe Actuel" required>
                                            <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->has('current_password'))
                                            <span class="text-danger">{{ $errors->first('current_password') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Nouveau Mot de passe</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Entrez le Nouveau Mot de passe" required>
                                            <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif -->
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Confirmer Mot de passe</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password-confirm" name="password_confirmation" class="form-control" placeholder="Confirmer le Nouveau Mot de passe" required>
                                            <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                        <!-- @if ($errors->has('password_confirmation'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </span>
                                        @endif -->
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"> Valider </button>
                                    </div>

                                </form>
                            </div> <!-- end card-body -->
                        </div>
                        <!-- end card -->

                    </div> <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- end container -->
        </div>
        <!-- end page -->

        <footer class="footer footer-alt font-weight-bold text-dark-50">
            <script>document.write(new Date().getFullYear())</script> © EECO
        </footer>

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
        
    </body>
</html>
