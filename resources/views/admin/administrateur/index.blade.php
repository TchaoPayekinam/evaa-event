@extends('admin.layout')
@section('content')



<div class="pagetitle">
    @if(session('success'))
        <div class="alert alert-success" id="success-message" role="alert">
            {{ session('success') }}
        </div>
    @endif
    @if(session('danger'))
        <div id="success-message" class="alert alert-danger" role="alert">
          {{ session('danger') }}
        </div>
    @endif
          <h1>Utilisateur</h1>
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item active">Liste des Administrateurs</li>
            </ol>
          </nav>
        </div><!-- End Page Title -->





            <section class="section">
                <a class ="btn btn-success" href="{{ route('manageAdmin.createForm') }}">Ajouter un Administrateur</a>
                <form action="{{ route('manageAdmin.search') }}" method="get" class="row g-3 py-3">
                    <div class="col-auto">
                        <input type="text" class="form-control" name="nom" placeholder="Nom de l'utilisateur">
                    </div>
                    <div class="col-auto">
                        <button type="submit" class="btn btn-primary mb-3">Faire une recherche</button>
                    </div>
                </form>
              <div class="row">


                <div class="col-lg-12">

                  <!-- Default Table -->
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nom</th>
                    <th scope="col">Prenoms</th>
                    <th scope="col">Email</th>
                    <th scope="col">Accréditation</th>
                    <th scope="col">Modifier</th>
                    <th scope="col">Supprimer</th>
                  </tr>
                </thead>
                <tbody>
                  @if($administrators->isEmpty())
                      <td colspan="6">Aucun utilisateur trouvé.</td>
                  @else
                  @foreach($administrators as $administrator)
                  <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $administrator->nom }}</td>
                    <td>{{ $administrator->prenom }}</td>
                    <td>{{ $administrator->email }}</td>
                    <td>{{ $administrator->accreditation }}</td>



                    <td><a href="{{ route('manageAdmin.edit', $administrator->id) }}"><img src="{{ asset('admin/assets/img/stylo.png') }}" alt=""></a></td>

                      <td>
                          <a class="delete-consignateur" data-bs-toggle="modal" data-bs-target="#disablebackdrop{{ $administrator->id }}" href="#">
                              <img src="{{ asset('admin/assets/img/supprimer.png') }}" alt="">
                          </a>
                      </td>
                  </tr>
                  <div class="modal fade" id="disablebackdrop{{ $administrator->id }}" tabindex="-1" data-bs-backdrop="false">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title">Confirmation</h5>
                                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                  Etes-vous sûr de vouloir supprimer <b>{{ $administrator->nom }} {{ $administrator->prenom }}</b> ?
                              </div>
                              <div class="modal-footer">
                                  <a href="#" class="btn btn-primary" data-bs-dismiss="modal">Retour</a>
                                  <form action="{{ route('manageAdmin.destroy', $administrator->id) }}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="btn btn-danger">Supprimer</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  @endforeach
                  @endif
                </tbody>
              </table>
              <!-- End Default Table Example -->

                </div>
              </div>
            </section>

@stop
