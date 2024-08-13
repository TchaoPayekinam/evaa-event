@extends('admin.layout')
@section('content')

    <div class="pagetitle">
        <h1>Les frais</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Liste des frais d'inscription</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <form action="{{ route('inscription.search') }}" method="get" class="row g-3 py-3">
                <div class="col-auto">
                    <input type="number" name="ref" class="form-control"  placeholder="Référence">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-success mb-3">Faire une recherche</button>
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
                        <!--<th scope="col">Client</th>-->
                        <!--<th scope="col">Email</th>-->
                        <th scope="col">Evènement</th>
                        <th scope="col">Validation</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if ($inscriptions->isEmpty())
                            <td colspan="10">Pas de données trouvées</td>
                        @else
                            
                        
                    @foreach($inscriptions as $inscription)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $inscription->ref_flooz }} {{ $inscription->ref_tmoney }}</td>
                            <td>{{ $inscription->paymentOption }}</td>
                            <td>{{ $inscription->paymentAmount }}</td>
                            <td>{{ $inscription->confirmationCode }}</td>
                            <!--<td>{{ $inscription->firstName }} {{ $inscription->lastName }}</td>-->
                            <!--<td>{{ $inscription->email }}</td>-->
                            <td>{{ $inscription->event_name }}</td>
                            <td>{{ $inscription->is_validate == 'false' ? 'Non' : 'Oui' }}</td>
                            <td>
                                @if ($inscription->is_validate == 'false')
                                <form action="{{ route('inscription.validate', $inscription->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-primary">Valider</button>
                                </form>
                                @else
                                <form action="{{ route('inscription.validateReset', $inscription->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-danger">Annuler</button>
                                </form>
                                @endif
                               
                                
                            </td>
                        </tr>

                       
                    @endforeach
                    @endif
                    </tbody>
                </table>
                <!-- End Default Table Example -->
            </div>
        </div>
    </section>
    <!-- Disabled Backdrop Modal -->

@stop
