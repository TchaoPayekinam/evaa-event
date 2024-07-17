@extends('front.layouts.app')

@section('title', 'Contact Us | Eva\'a Event & Com')

@section('headSection')
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/10.5.1/sweetalert2.all.min.js"></script>
@endsection

@section('content') 
    <!-- Contact Form Area Start Here -->
    <section class="section-space-default2-less30 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 margin-b-30rem">
                    <h2 class="title-bold color-dark size-sm title-bar">{{ trans('contact.contact-h2') }}...</h2>
                    <p class="margin-b-30">{{ trans('contact.contact-p') }}</p>
                    <form id="contactForm" class="contact-form" method="POST" action="{{ route('post_contact_form') }}">
                        {{ csrf_field() }}
                        <fieldset>
                            <div id="error-message" class="alert alert-danger d-none"></div>
                            <div class="row">                                
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-firstName">{{ trans('contact.first-name') }}<span style="color: red">*</span></label>
                                        <input type="text" placeholder="" value="{{ old('firstName') }}" class="form-control" name="firstName" id="form-firstName" data-error="{{ trans('contact.first-name-required') }}" required>
                                        <!-- @error('firstName')
                                            <span class="text-danger font-size" style="color: red">{{$message}}</span>
                                        @enderror -->
                                        <!-- <div class="help-block with-errors" style="color: red"></div> -->
                                    </div>
                                </div>

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-lastName">{{ trans('contact.last-name') }}<span style="color: red">*</span></label>
                                        <input type="text" placeholder="" value="{{ old('lastName') }}" class="form-control" name="lastName" id="form-lastName" data-error="{{ trans('contact.last-name-required') }}" required>
                                        <!-- @error('lastName')
                                            <span class="text-danger font-size" style="color: red">{{$message}}</span>
                                        @enderror -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-phoneNumber">{{ trans('contact.phone') }}<span style="color: red">*</span></label>
                                        <input type="text" placeholder="Ex : +228 97000001" value="{{ old('phoneNumber') }}" class="form-control" name="phoneNumber" id="form-phoneNumber" data-error="{{ trans('contact.phone-required') }}" required>
                                        <!-- @error('phoneNumber')
                                            <span class="text-danger font-size" style="color: red">{{$message}}</span>
                                        @enderror -->
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="form-society">{{ trans('contact.company') }}</label>
                                        <input type="text" placeholder="" value="{{ old('society') }}" class="form-control" name="society" id="form-society">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="form-email">{{ trans('contact.email') }}<span style="color: red">*</span></label>
                                        <input type="email" placeholder="" value="{{ old('email') }}" class="form-control" name="email" id="form-email" data-error="{{ trans('contact.email-required') }}" required>
                                        <!-- @error('email')
                                            <span class="text-danger font-size" style="color: red">{{$message}}</span>
                                        @enderror -->
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="form-message">{{ trans('contact.message') }}<span style="color: red">*</span></label>
                                        <textarea placeholder="" class="textarea form-control" name="message" id="form-message" rows="5" cols="10" data-error="{{ trans('contact.msg-required') }}" value="{{ old('message') }}" required></textarea>
                                        <!-- @error('message')
                                            <span class="text-danger font-size" style="color: red">{{$message}}</span>
                                        @enderror -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6 col-sm-12">
                                    <div class="form-group margin-b-none">
                                        <button type="submit" id="submitForm" class="btn-fill color-yellow border-radius-5">{{ trans('contact.send-msg') }}</button>
                                        <img id="submission_loading" src="{{ asset('event/assets/img/ajax-loader.gif') }}" style="display: none;"> 
                                    </div>
                                </div>

                                @if(session('success'))
                                    <div class="alert alert-success auto-dismiss-alert col-lg-12 mt-3">
                                        {{ session('success') }}
                                    </div>
                                @elseif (session('error'))
                                <div class="alert alert-danger auto-dismiss-alert col-lg-12 m-5">
                                    {{ session('error') }}
                                </div>
                                @endif
                            </div>
                        </fieldset>
                    </form>
                </div>
                <div class="sidebar-widget-area sidebar-break-md col-lg-4 col-md-12">
                    <div class="widget">
                        <h2 class="title-bold color-dark size-sm title-bar title-bar-high">{{ trans('contact.contact') }}</h2>
                        <div class="contact-us-info">
                            <ul>
                                <li>
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>{{ trans('contact.map') }}</li>
                                <li>
                                    <i class="fa fa-phone" aria-hidden="true"></i>(+228) 92-04-05-94 <br>
                                    (+228) 96-02-82-82
                                </li>
                                <li>
                                    <i class="fa fa-envelope-o" aria-hidden="true"></i>evaa.event@gmail.com
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Area End Here -->
    <!-- Map Area Start Here -->
    <section class="mt-5">
        <div>
            <div class="google-map-area">
                <div id="" style="width:100%; height:496px;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0769896476722!2d1.2855315!3d6.2535869!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1023fd000fc2743d%3A0x9b650c6248c09654!2sEECO%20-%20Eva&#39;a%20Event%20%26%20Com!5e0!3m2!1sfr!2stg!4v1720481410510!5m2!1sfr!2stg" width="100%" height="496px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </section>
    <!-- Map Area End Here -->
@endsection

@section('scriptSection')
    <script type="text/javascript">
        $(document).ready(function() {
            // Gestionnaire d'événement pour le bouton "Valider"
            $('#submitForm').on('click', function(e) {
                e.preventDefault(); // Empêcher l'envoi du formulaire par défaut
                var $this = $(this); //submit button selector using ID

                // Vérifier si tous les champs sont remplis
                var isFormValid = true;
                $('#contactForm input[required], #contactForm textarea[required]').each(function() {
                    var $input = $(this);
                    var errorMessage = $input.attr('data-error') || 'Ce champ est obligatoire';

                    if ($.trim($input.val()) == '') {
                        isFormValid = false;
                        $input.addClass('error');

                        // Supprimer l'ancien message d'erreur s'il existe
                        $input.next('.help-block').remove();

                        // Ajouter le nouveau message d'erreur
                        $input.after('<div class="help-block with-errors" style="color: red">' + errorMessage + '</div>');
                    } else {
                        $input.removeClass('error');
                        $input.next('.help-block').remove();
                    }
                });
                

                // Si des champs ne sont pas remplis, afficher un message d'erreur
                if (!isFormValid) {
                    $('#error-message').text('Veuillez remplir tous les champs obligatoires.').removeClass('d-none');
                    return false;
                } /*else {
                    // Vérification du champ checkbox requis
                    if (!$('#privacy_policy').is(':checked')) {
                        isFormValid = false;
                        //$('#privacy_policy').addClass('msg-error');
                        $('#privacy_policy').before('<span class="text-danger">Ce champ est requis</span><br/>');
                        //$('<span class="error-message">Ce champ est requis</span>').insertAfter('#rememberme');
                        return false;
                    } else {
                        //$('#privacy_policy').removeClass('error');
                        //$('#privacy_policy').prev('.text-danger').remove();
                    }
                }*/

                // Afficher le loader
                $('#submission_loading').show();

                // Cacher le bouton de soumission pour éviter plusieurs soumissions
                $('#submitForm').hide();

                var url = "{{ route('post_contact_form') }}";

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
               
                // Si tous les champs sont remplis, envoyer une requête AJAX pour valider le formulaire
                $.ajax({
                    url: url,
                    method: 'POST',
                    data: $('#contactForm').serialize(),
                    /*beforeSend: function () {
                        $this.attr('disabled', true).html("Traitement...");
                    },*/
                    success: function(response) {
                        // Cacher le loader
                        $('#submission_loading').hide();

                        // Réafficher le bouton de soumission
                        $('#submitForm').show();

                        if (response.success) {
                            //alert(response.success);
                            // Optionnel: réinitialiser le formulaire
                            $('#contactForm')[0].reset();
                            Swal.fire({
                              toast: true,
                              position: 'top-end',
                              showConfirmButton: false,
                              timer: 3000,
                              timerProgressBar: true,
                              icon: 'success',
                              text: response.success,
                            }).then((result) => {
                                //window.location = response.redirect_url;
                                window.location = window.location.href;
                            });
                        } else if (response.error) {
                            $('#error-message').text(response.error).removeClass('d-none');
                        }
                    },
                    error: function(xhr, status, error) {
                        // Cacher le loader
                        $('#submission_loading').hide();

                        // Réafficher le bouton de soumission
                        $('#submitForm').show();

                        // Traiter les erreurs
                        var errorMessage = xhr.responseJSON && xhr.responseJSON.error ? xhr.responseJSON.error : 'Une erreur s\'est produite. Veuillez réessayer.';
                        $('#error-message').text(errorMessage).removeClass('d-none');
                    }
                });

            });
            
        });
    </script>
    <!-- Validator js -->
    <script src="{{ asset('event/assets/js/validator.min.js') }}"></script>
@endsection