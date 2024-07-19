@extends('admin.layout')

@section('content')
    <div class="pagetitle">
        <h1>Camion</h1>
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
                                <label for="" class="form-label">Série</label>
                                <input type="text" name="libelle" value="{{ $evenement->libelle }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Numéro</label>
                                <input type="text" name="lieu" value="{{ $evenement->lieu }}" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Pays</label>
                                <input type="text" name="date" value="{{ $evenement->date }}" class="form-control">
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary">Modifier</button>
                                    <a href="{{ route('admin.dashboard') }}" class="btn btn-success">Retour</a>
                                </div>
                            </div>
                        </form><!-- End General Form Elements -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
