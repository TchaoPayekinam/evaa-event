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
            /* text-align: center; */
        }
        
        .table-bordered th {
            border-top: 1px solid black!important;
            border-left: 1px solid black!important;
            border-right: 1px solid black!important;
        }

        /* .table-bordered td, .table-bordered th {*/
        .table-bordered td {
            border: 1px solid black!important;
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
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Profils</a></li>
                        <li class="breadcrumb-item active">Liste</li>
                    </ol>
                </div>
                <h4 class="page-title">Profils d'utilisateurs</h4>
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
                                <!-- New profile modal -->
                                <button type="button" class="btn btn-primary mb-2" data-toggle="modal" data-target="#profile-modal"><i class="mdi mdi-plus-circle mr-2"></i> Nouveau</button>	                                
                            </div> 
                            
                            <!-- New profile modal content -->
                            <div id="profile-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <div class="text-center mt-2 mb-4">
                                            	<h4 class="page-title">Nouveau Profil</h4>
                                            </div> 

                                            <form class="pl-3 pr-3" action="{{ route('profiles.store') }}" method="post">
                                                {!! csrf_field() !!}
                                                <div class="form-group">
                                                    <label for="name">Libellé</label>
                                                    <input class="form-control" type="text" name="name" id="name" required="" placeholder="Libellé du Profil">
                                                </div>

                                                <div class="form-group text-center">
                                                    <button class="btn btn-primary" type="submit">Valider</button>
                                                </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.End modal -->

                            <!-- <table id="basic-datatable" class="table dt-responsive nowrap w-100"> -->
                            <table id="scroll-horizontal-datatable" class="table table-bordered w-100 nowrap">
                                <thead>
                                    <tr>
                                    	<th>S.No</th>
                                        <th>Libellé</th>
                                        <th style="text-align: center;">Action</th>
                                    </tr>
                                </thead>                            
                            
                                <tbody>    
                                @foreach($profiles as $profile)                                    
                                    <tr>
                                        <td>{{ $loop->index + 1 }}</td>
                                        <td class="font-weight-bold">{{ $profile->name }}</td>
                                        <td style="text-align: center;">
                                           
                                            <!--
                                            <a href="javascript:void(0);" class="action-icon"> <i class="mdi mdi-delete"></i></a> -->

                                            <a href="javascript:void(0);" class="badge badge-outline-warning" data-toggle="modal" data-target="#profile-modal-{{$profile->id}}"><i class="mdi mdi-square-edit-outline"></i>Editer</a>
                                        </td>   

                                        <!-- Edit Profile modal content -->
                                        <div id="profile-modal-{{$profile->id}}" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                                            <div class="modal-dialog">
                                                <div class="modal-content">

                                                    <div class="modal-body">
                                                        <div class="text-center mt-2 mb-4">
                                                            <h4 class="page-title">Editer Profil</h4>
                                                        </div> 

                                                        <form class="pl-3 pr-3" action="{{ route('profiles.update', $profile->id) }}" method="post">
                                                            @csrf
                                                            {{ method_field('PUT') }}
                                                            <div class="form-group">
                                                                <label for="name">Libellé</label>
                                                                <input class="form-control" type="text" name="name" id="name" required="" value="{{$profile->name}}" placeholder="Libellé du Profil">
                                                            </div>

                                                            <div class="form-group text-center">
                                                                <button class="btn btn-primary" type="submit">Valider</button>
                                                            </div>

                                                        </form>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
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
@endsection