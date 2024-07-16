@extends('admin.layout')
@section('content')

    <div class="pagetitle">
        <h1>Payements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Liste des Payements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <form action="" method="get" class="row g-3 py-3">
                <div class="col-auto">
                    <input type="text" name="serie" class="form-control"  placeholder="Série">
                </div>
                <div class="col-auto">
                    <input type="text" name="numero" class="form-control"  placeholder="Numéro">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-3">Faire une recherche</button>
                </div>
            </form>
            <div class="col-lg-12">
                <!-- Default Table -->
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Références</th>
                        <th scope="col">Option de payement</th>
                        <th scope="col">Montant</th>
                        <th scope="col">Code de Confirmation</th>
                        <th scope="col">Client</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($payements as $payement)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $payement->ref }}</td>
                            <td>{{ $payement->paymentOption }}</td>
                            <td>{{ $payement->paymentAmount }}</td>
                            <td>{{ $payement->confirmationCode }}</td>
                            <td>{{ $payement->firstName }} {{ $payement->lastName }}</td>
                            <td>{{ $payement->email }}</td>
                            <td>{{ $payement->is_validate == 0 ? 'Non' : 'Oui' }}</td>
                            <td>
                                @if ($payement->is_validate == '1')
                                <form action="{{ route('payement.validateReset', $payement->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-danger">Annuler</button>
                                </form>
                                @else
                                <form action="{{ route('payement.validate', $payement->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-primary">Valider</button>
                                </form>
                                @endif
                               
                                
                            </td>
                        </tr>

                       
                    @endforeach
                    </tbody>
                </table>
                <!-- End Default Table Example -->
            </div>
        </div>
    </section>
    <!-- Disabled Backdrop Modal -->

@stop
