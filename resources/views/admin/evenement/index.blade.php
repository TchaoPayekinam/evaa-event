@extends('admin.layout')
@section('content')


    <div class="pagetitle">
        <h1>Evènements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Liste des évènements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <a class ="btn btn btn-success col-lg-3 new-consignateur mb-3" href="{{ route('evenement.createForm') }}">Créer un évènement</a>
            <div class="col-lg-12">
                <!-- Default Table -->
                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nom</th>
                        <th scope="col">Type</th>
                        <th scope="col">Lieu</th>
                        <th scope="col">Frais d'inscription</th>
                        <th scope="col">Frais de formation</th>
                        <th scope="col">Date de début</th>
                        <th scope="col">Date de fin</th>
                        <th scope="col">Modifier</th>
                        <th scope="col">Supprimer</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($evenements as $evenement)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $evenement->name }}</td>
                            <td>{{ $evenement->type }}</td>
                            <td>{{ $evenement->lieu }}</td>
                            <td>{{ $evenement->frais_inscription }}</td>
                            <td>{{ $evenement->frais_formation }}</td>
                            <td>{{ $evenement->date_deb }}</td>
                            <td>{{ $evenement->date_fin }}</td>
                            <td><a href="{{ route('evenement.edit', $evenement->id) }}"><img src="{{ asset('admin/assets/img/stylo.png') }}" alt=""></a></td>
                            <td>
                                <a class="delete-consignateur" data-bs-toggle="modal" data-bs-target="#disablebackdrop{{ $evenement->id }}" href="#">
                                    <img src="{{ asset('admin/assets/img/supprimer.png') }}" alt="">
                                </a>
                            </td>
                        </tr>


                    <!-- Modal pour le consignateur en cours -->
                    <div class="modal fade" id="disablebackdrop{{ $evenement->id }}" tabindex="-1" data-bs-backdrop="false">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Confirmation</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Etes-vous sûr de vouloir supprimer <b>{{ $evenement->name }}</b> ?
                                </div>
                                <div class="modal-footer">
                                    <a href="#" class="btn btn-primary" data-bs-dismiss="modal">Retour</a>
                                    <form action="{{ route('evenement.destroy', $evenement->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Supprimer</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    </tbody>
                </table>
                <!-- End Default Table Example -->
            </div>
        </div>
    </section>


    <!-- Disabled Backdrop Modal -->




@stop
