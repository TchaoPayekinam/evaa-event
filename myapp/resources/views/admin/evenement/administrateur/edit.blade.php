@extends('admin.layout')
@section('content')

    <div class="pagetitle">
        <h1>Utilisateur</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Modifier des Administrateurs</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card new-consignateur-form">
                <div class="card-body">
                      <h5 class="card-title">Modifier un Administrateur</h5>

                      <!-- General Form Elements -->
                      <form action="{{ route('manageAdmin.update', $administrator->id) }}" method="post">
                        @method('put')
                      @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Nom</label>
                            <input type="text" name="nom" value="{{ $administrator->nom }}" class="form-control">
                            @error('nom')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Prénom</label>
                            <input type="text" name="prenom" value="{{ $administrator->prenom }}" class="form-control">
                            @error('prenom')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        

                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" value="{{ $administrator->email }}" class="form-control">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="" class="form-label">Accréditation</label>
                            <select class="form-select" name="accreditation" aria-label="Default select example">
                                <option selected>-- Choisir --</option>
                                <option value="Administrateur">Administrateur</option>
                                <option value="Super Administrateur">Super Administrateur</option>
                            </select>
                        </div>



                        <div class="row mb-3">
                          <div class="col-sm-8">
                            <button type="submit" value="Update" class="btn btn-primary">Modifier</button>

                            <a class="btn btn-success" href="{{ route('manageAdmin.index') }}">Retour</a>
                          </div>
                        </div>

                      </form><!-- End General Form Elements -->

                </div>
            </div>
        </div>
    </div>


@endsection
