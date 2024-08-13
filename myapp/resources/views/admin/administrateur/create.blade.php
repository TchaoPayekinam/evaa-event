@extends('admin.layout')
@section('content')

    <div class="pagetitle">
        <h1>Utilisateur</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Créer des Administrateurs</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <div class="row">
        <div class="col-lg-12">
            <div class="card new-consignateur-form">
                <div class="card-body">
                      <h5 class="card-title">Ajouter des Administrateurs</h5>
                      @if ($errors->any())
                      <div class="alert alert-danger">
                          <ul>
                              @foreach ($errors->all() as $error)
                                  <li>{{ $error }}</li>
                              @endforeach
                          </ul>
                      </div>
                  @endif
          
                      <!-- General Form Elements -->
                      <form action="{{ route('manageAdmin.create') }}" method="post">
                     @csrf

                        <div class="mb-3">
                            <label for="" class="form-label">Nom</label>
                            <input type="text" name="nom" class="form-control  @error('nom') is-invalid @enderror" value="{{ old('nom') }}">
                            @error('nom')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Prénom</label>
                            <input type="text" name="prenom" class="form-control  @error('prenom') is-invalid @enderror" value="{{ old('prenom') }}">
                            @error('prenom')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label for="" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control  @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            @error('email')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="" class="form-label">Mot de passe</label>
                            <input type="password"  name="password" class="form-control @error('password') is-invalid @enderror">
                            @error('password')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                          <label for="" class="form-label">Confirmer le mot de passe</label>
                          <input type="password"  name="password_confirm" class="form-control @error('password_confirm') is-invalid @enderror">
                            @error('password_confirm')
                            <div class="text-danger">{{ $message }}</div>
                            @enderror
                      </div>
                        {{-- <div class="mb-3">
                            <label for="" class="form-label">Profile</label>
                            <select class="form-select @error('role') is-invalid @enderror"  name="role" aria-label="Default select example">
                                <option value="">Choisir un profil</option>
                                <option value="Administrateur">Administrateur</option>
                                <option value="Chef">Chef</option>
                                <option value="Pointeur">Pointeur</option>
                              </select>
                        </div> --}}




                        <div class="row mb-3">
                          <div class="col-sm-8">
                            <button type="submit" value="Save" class="btn btn-primary">Ajouter</button>
                            <a class="btn btn-success" href="{{ route('manageAdmin.index') }}" >Retour</a>
                          </div>
                        </div>

                      </form><!-- End General Form Elements -->

                </div>
            </div>
        </div>
    </div>

@endsection
