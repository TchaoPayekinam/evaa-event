@extends('admin.layouts.app')

@section('headSection')
	<!-- third party css -->
    <link href="{{ asset('template_admin/assets/css/vendor/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template_admin/assets/css/vendor/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template_admin/assets/css/vendor/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template_admin/assets/css/vendor/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <!-- third party css end -->

    <style type="text/css">
        .table, .table td, .table th{
            border-color: black;
            text-align: center;
        }

        .table-bordered th {
            border-bottom: 1px solid black!important;
        }
    </style>
@endsection

@section('content')
	<div class="container-fluid">
                        
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Administration</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Administrateurs</a></li>
                            <li class="breadcrumb-item active">Liste</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Liste des administrateurs</h4>
                </div>
            </div>
        </div>     
        <!-- end page title --> 


        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content">                        	  
                            <div class="tab-pane show active" id="basic-datatable-preview">
                            	<div class="text-right">
	                                <!-- New user modal -->
	                                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#user-modal"><i class="mdi mdi-plus-circle mr-2"></i> Nouveau</button>
	                            </div> 
                                
	                            <!-- New user modal content -->
                                    @include('admin.users.new')
                                <!-- /.End modal -->

                                <div id="status-success-msg">
                                </div>

                                <table id="scroll-horizontal-datatable" class="table table-bordered w-100 nowrap">
                                    <thead>
                                        <tr>
                                        	<th>S.No</th>
                                            <th>Nom & Prénoms</th>
                                            <th>E-mail</th>
                                            <th>Profil</th>
                                            <th>Statut (Actif?)</th>
                                            <th>LAST LOGIN</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                
                                    <tbody>    
                                        @foreach($admins as $user) 
                                            <tr>
                                                <td>{{ $loop->index + 1 }}</td>
                                                <td class="font-weight-bold" style="text-align: left;">{{ $user->last_name }} {{ $user->first_name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->name }}</td>
                                                <td>
                                                    <div>
                                                        <input type="checkbox" name="inputCheckbox" id="switch{{$user->id}}" data-switch="success" onclick="changeStatus({{$user->id}});" @if($user->active == 1) checked @endif/>
                                                        <label for="switch{{$user->id}}" data-on-label="Oui" data-off-label="Non" class="mb-0 d-block"></label>
                                                    </div>
                                                </td>
                                                <td>@if(!is_null($user->last_login_at)) {{ \Carbon\Carbon::parse($user->last_login_at)->format('d/m/Y H:i:s') }} @else - @endif</td>
                                                <td>
                                                    <!-- <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-eye"></i></a> -->
                                                    <a href="javascript:void(0);" class="action-icon" data-toggle="modal" data-target="#user-modal-{{$user->id}}">
                                                    {{-- <i class="mdi mdi-square-edit-outline"></i></a> --}}
                                                    {{-- <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a> --}}
                                                    <a href="javascript:void(0);" class="badge badge-outline-warning" data-toggle="modal" data-target="#reset-pwd-{{$user->id}}"><i class="mdi mdi-account-key-outline"></i>Réin.</a>
                                                    <a href="javascript:void(0);" class="badge badge-outline-success" data-toggle="modal" data-target="#edit-user-{{$user->id}}"><i class="mdi mdi-account-key-outline"></i>Mod.</a>
                                                    <a href="javascript:void(0);" class="badge badge-outline-danger" data-toggle="modal" data-target="#delete-user-{{$user->id}}"><i class="mdi mdi-delete-outline"></i>Supp.</a>
                                                </td>   

                                                <!-- Modal content -->
                                                @include('admin/users/modals/reset-user-pwd')
                                                <!-- /End modal -->
                                                <!-- Edit Profile modal content -->
                                                @include('admin/users/modals/update-user-pwd')
                                                <!-- /End modal --> 

                                                <!-- Edit user modal content -->
                                                <div id="edit-user-{{$user->id}}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                
                                                            <div class="modal-body">
                                                                <div class="text-center mt-2 mb-4">
                                                                    <h4 class="page-title">Nouveau Utilisateur</h4>
                                                                </div> 
                                                                <div id="success-msg">
                                                                </div>
                                                                <form id="edit-user-{{$user->id}}" action="{{ route('manageAdmin.update', $user->id) }}" method="POST" class="pl-3 pr-3">
                                                                    {!! csrf_field() !!}
                                                                    @method('put')
                                                                    <div class="form-group">
                                                                        <label for="name">Nom </label>
                                                                        <input class="form-control" type="text" value="{{ $user->last_name }}" name="last_name" id="last_name" required="" placeholder="Nom ">
                                                
                                                                        <span class="text-danger" id="last-name-error"></span>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="name">Prénoms</label>
                                                                        <input class="form-control" type="text" value="{{ $user->first_name }}" name="first_name" id="first_name" required="" placeholder="Prénoms">
                                                
                                                                        <span class="text-danger" id="first-name-error"></span>
                                                                    </div>
                                                                    <div class="form-group">
                                                                        <label for="name">E-mail</label>
                                                                        <input class="form-control" value="{{ $user->email }}" type="text" name="email" id="email" required="" placeholder="E-mail">
                                                
                                                                        <span class="text-danger" id="email-error"></span>
                                                                    </div>
                                                                    <div class="form-group"> 
                                                                        <label for="" class="col-form-label">Profil</label>
                                                                        <select id="profile" name="profile" class="form-control" data-toggle="select2" title="Profil">
                                                                            <option value="0">Choisir</option>
                                                                            @foreach($profiles as $profile)
                                                                            <option value="{{ $profile->id }}">{{ $profile->name }}</option>
                                                                            @endforeach
                                                                        </select>
                                                
                                                                        <span class="text-danger" id="profile-error"></span>
                                                                    </div>
                                                
                                                                    <div class="form-group text-center">
                                                                        <button class="btn btn-primary" id="submitForm">Valider</button> 
                                                                    </div>
                                                                </form>
                                                                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- /End modal --> 

                                                <!-- Delete user modal content -->
                                                <div id="delete-user-{{$user->id}}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                                    <div class="modal-dialog modal-sm">
                                                        <div class="modal-content">
                                                            <div class="modal-body p-4">
                                                                <div class="text-center">
                                                                    <i class="dripicons-wrong h1 text-danger"></i>
                                                                    <p class="mt-3">Voulez-vous supprimer cet utilisateur?</p>
                                                                    
                                                                </div>
                                                                <form class="pl-3 pr-3" action="{{ route('admins.destroy', $user->id) }}" method="POST">
                                                                    {!! csrf_field() !!}
                                                                    {{ method_field('DELETE') }}
                                                                    <div class="form-group text-center">
                                                                        <button type="submit" class="btn btn-danger my-2">Valider</button>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div><!-- /.modal-content -->
                                                    </div><!-- /.modal-dialog -->
                                                </div><!-- /.modal -->
                                                <!-- /End modal -->

                                            </tr>  
                                        @endforeach
                                    </tbody>
                                </table>                                           
                            </div> <!-- end preview-->                        
                           
                        </div> <!-- end tab-content-->

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->
        
    </div>
@endsection

@section('scriptSection')
    <script type="text/javascript">
        $(document).ready(function() {
            $('body').tooltip({
                selector: "[data-tooltip=tooltip]",
                container: "body"
            });
        });
    </script>
	<!-- third party js -->
    <script src="{{ asset('template_admin/assets/js/vendor/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('template_admin/assets/js/vendor/dataTables.bootstrap4.js') }}"></script>
    <script src="{{ asset('template_admin/assets/js/vendor/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('template_admin/assets/js/vendor/responsive.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template_admin/assets/js/vendor/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('template_admin/assets/js/vendor/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('template_admin/assets/js/vendor/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('template_admin/assets/js/vendor/buttons.flash.min.js') }}"></script>
    <script src="{{ asset('template_admin/assets/js/vendor/buttons.print.min.js') }}"></script>
    <script src="{{ asset('template_admin/assets/js/vendor/dataTables.keyTable.min.js') }}"></script>
    <script src="{{ asset('template_admin/assets/js/vendor/dataTables.select.min.js') }}"></script>
    <!-- third party js ends -->

    <!-- demo app -->
    <script src="{{ asset('template_admin/assets/js/pages/demo.datatable-init.js') }}"></script>
    <!-- end demo js-->

    <!--  -->

    <script>
         jQuery(document).ready(function(){
            jQuery('#submitForm').click(function(e){
               e.preventDefault();
               $("#last-name-error").text("");
               $("#first-name-error").text("");
               $("#email-error").text("");
               $("#profile-error").text("");

               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
               });
               jQuery.ajax({
                  url: "{{ route('admins.store') }}",
                  method: 'POST',
                  data: $('#user_form').serialize(),
                  success: function(result){

                    if(result.errors) {
                        if(result.errors.last_name){
                            $( '#last-name-error' ).html( result.errors.last_name[0] );
                        }
                        if(result.errors.first_name){
                            $( '#first-name-error' ).html( result.errors.first_name[0] );
                        }
                        if(result.errors.email){
                            $( '#email-error' ).html( result.errors.email[0] );
                        }
                        if(result.errors.profile){
                            $( '#profile-error' ).html( result.errors.profile[0] );
                        }
                        
                    }
                    if(result.success) {
                        $('#success-msg').html('<div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><strong>Utilisateur enregistré avec succès</strong></div>');

                            $('#user_form')[0].reset();

                            setTimeout(function() {
                                location.reload();
                            }, 2000);                         
                    }

                  }});
               });
            });
      </script>
@endsection