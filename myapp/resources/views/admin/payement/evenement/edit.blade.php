@extends('admin.layout')

@section('content')
    <div class="pagetitle">
        <h1>Evènements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Modifier des évènements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card new-consignateur-form">
                    <div class="card-body">
                        <h5 class="card-title">Modifier un évènements</h5>
                        <!-- General Form Elements -->
                        <form class="" action="{{ route('evenement.update', $evenement->id) }}" method="post">
                            @csrf
                            @method('PUT')
                            <div class="mb-3">
                                <label for="" class="form-label">Nom</label>
                                <input type="text" name="name" value="{{ $evenement->name }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Description</label>
                                <textarea rows="3" name="description" class="form-control">{{ $evenement->description }} </textarea>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Type</label>
                                <input type="text" name="type" value="{{ $evenement->type }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Lieu</label>
                                <input type="text" name="lieu" value="{{ $evenement->lieu }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Frais d'inscription</label>
                                <input type="number" name="frais_inscription" value="{{ $evenement->frais_inscription }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Frais de formation</label>
                                <input type="number" name="frais_formation" value="{{ $evenement->frais_formation }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Date de début</label>
                                <input type="date" name="date_deb" value="{{ $evenement->date_deb }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Date de fin</label>
                                <input type="date" name="date_fin" value="{{ $evenement->date_fin }}" class="form-control">
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                    <a href="{{ route('evenement.index') }}" class="btn btn-success">Retour</a>
                                </div>
                            </div>
                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
