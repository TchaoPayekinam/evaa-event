@extends('admin.layouts.app')

@section('headSection')
	<link href="{{ asset('template_admin/assets/css/vendor/dataTables.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template_admin/assets/css/vendor/responsive.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template_admin/assets/css/vendor/buttons.bootstrap4.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('template_admin/assets/css/vendor/select.bootstrap4.css') }}" rel="stylesheet" type="text/css" />

    <style type="text/css">
        .table, .table td, .table th{
            border-color: black;
            text-align: center;
        }

        table.table-bordered.dataTable {
            border-top-width: 0;
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
                        <!-- <li class="breadcrumb-item"><a href="javascript: void(0);">Transactions</a></li> -->
                        <li class="breadcrumb-item active">Transactions</li>
                    </ol>
                </div>
                <h4 class="page-title">Liste des transactions effectuées</h4>
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

                            <!-- <div class="btn-group d-block mb-2" style="width: 240px;">
                                <button type="button" class="btn btn-success btn-block dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Exporter </button>
                                <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="#"><i class="mdi mdi-file-excel-outline mr-1"></i> Excel</a>
                                </div>
                            </div> -->

                            <div class="table-responsive">
                                <table id="scroll-horizontal-datatable" class="table table-bordered table-centered mb-0 w-100">
                                    <thead>
                                        <tr>
                                            <th class="align-middle" style="text-align: center; border-color: black;">S.No</th>
                                            <!-- <th class="align-middle" style="text-align: center; border-color: black;">N<sup>o</sup> Cmde</th> -->
                                            <th class="align-middle" style="text-align: center; border-color: black;">Mode de paiement</th>
                                            <th class="align-middle" style="text-align: center; border-color: black;">Référence du paiement </th>
                                            <th class="align-middle" style="text-align: center; border-color: black;">Montant</th>
                                            <th class="align-middle" style="text-align: center; border-color: black;">Date d'envoi</th>
                                            <!-- <th class="align-middle" style="text-align: center; border-color: black;">Date de la commande</th>
                                            <th class="align-middle" style="text-align: center; border-color: black;">Date et Heure de chargement</th> -->
                                            <th class="align-middle" style="text-align: center; border-color: black;">Action</th>
                                        </tr>
                                    </thead>                                
                                    <tbody>  
                                        @foreach($transactions as $transaction)
                                        <tr>
                                            <td style="text-align: center;">{{ $loop->index + 1 }}</td>
                                            <td style="text-align: center;">{{ $transaction->method }}</td>
                                            <td style="text-align: center;">{{ $transaction->ref_number }}</td>
                                            <td style="text-align: center;">{{ $transaction->amount }}</td>
                                            <td style="text-align: center;">{{ \Carbon\Carbon::parse($transaction->created_at)->format('d/m/Y H:i:s') }}</td>
                                            <td style="text-align: center;">
                                                <a href="javascript:void(0);" class="badge badge-primary text-white" data-toggle="modal" data-target="#confirm-{{$transaction->id}}">Confirmer</a>
                                            </td>
                                            <!-- Modal Confirm Transaction -->
                                            @include('admin/transactions/confirm-modal')
                                            <!--  -->
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>  
                            </div>			    

                        </div> <!-- end preview-->
                    </div> <!-- end tab-content-->

                </div> <!-- end card body-->
            </div> <!-- end card -->
        </div><!-- end col-->
    </div>
    <!-- end row-->
    <div id="table"> </div>
    
</div>
@endsection

@section('scriptSection')
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