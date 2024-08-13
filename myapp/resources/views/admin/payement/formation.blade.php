@extends('admin.layout')
@section('content')

    <div class="pagetitle">
        <h1>Les frais</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Liste des frais de formation</li>
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
                        <th scope="col">Evènement</th>
                        <th scope="col">Validation</th>
                        <th scope="col">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                        @if ($formations->isEmpty())
                            <td colspan="8">Pas de données trouvées</td>
                        @else
                            
                        
                    @foreach($formations as $formation)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $formation->ref }}</td>
                            <td>{{ $formation->paymentOption }}</td>
                            <td>{{ $formation->paymentAmount }}</td>
                            <td>{{ $formation->confirmationCode }}</td>
                            <td>{{ $formation->event_name }}</td>
                            <td>{{ $formation->is_validate == 0 ? 'Non' : 'Oui' }}</td>
                            <td>
                                @if ($formation->is_validate == 0)
                                <form action="{{ route('formation.validate', $formation->id) }}" method="post">
                                    @csrf
                                    @method('put')
                                    <button class="btn btn-primary">Valider</button>
                                </form>
                                @else
                                <form action="{{ route('formation.validateReset', $formation->id) }}" method="post">
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
