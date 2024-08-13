<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <title>Log In | Eva\'a Event & Com Administration</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Solutions évènementielles sur mesure, ciblant toutes les catégories socioprofessionnelles" name="description" />
        <meta content="Coderthemes" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('event/assets/img/logo.png') }}">

        <!-- App css -->
        <link href="{{ asset('template_admin/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('template_admin/assets/css/app.min.css') }}" rel="stylesheet" type="text/css" id="light-style" />
        <link href="{{ asset('template_admin/assets/css/app-dark.min.css') }}" rel="stylesheet" type="text/css" id="dark-style" />

        <style type="text/css">
            body.authentication-bg {
                
                background: url({{url('assets/images/background1.png')}});
                background-size: cover;
                background-position: center bottom;
            }
        </style>  

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
                                    <h4 class="text-dark-50 text-center mt-0 font-weight-bold">Se Connecter</h4>
                                    <p class="text-muted mb-4">Entrez votre adresse e-mail et votre mot de passe pour accéder au panneau d'administration.</p>
                                </div>

                                @if (session('error'))
                                    <div class="alert alert-danger alert-square">
                                        {{ session('error') }}
                                    </div>
                                @endif
                                <form action="{{ route('admin.login') }}" method="POST">
                                    {{ csrf_field() }}

                                    <div class="form-group">
                                        <label for="emailaddress">E-mail</label>
                                        <input class="form-control" type="email" id="email" name="email" required="" value="{{ old('email')}}" placeholder="Entrez votre e-mail">
                                        @if ($errors->has('email'))
                                            <span class="text-danger">{{ $errors->first('email') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Mot de passe</label>
                                        <div class="input-group input-group-merge">
                                            <input type="password" id="password" name="password" class="form-control" placeholder="Entrez votre mot de passe">
                                            <div class="input-group-append" data-password="false">
                                                <div class="input-group-text">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="text-danger">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group mb-0 text-center">
                                        <button class="btn btn-primary" type="submit"> Se Connecter </button>
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
        
    </body>
</html>