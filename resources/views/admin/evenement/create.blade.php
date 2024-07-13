@extends('admin.layout')

@section('content')
    <div class="pagetitle">
        <h1>Evènements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Ajouter des évènements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card new-consignateur-form">
                    <div class="card-body">
                        <h5 class="card-title">Créer un évènement</h5>
                        <!-- General Form Elements -->
                        <form class="" action="{{ route('evenement.create') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Libellé</label>
                                <input type="text" name="libelle" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Lieu</label>
                                <input type="text" name="lieu" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Date</label>
                                <input type="date" name="date" class="form-control">
                            </div>
                            <div class="row mb-3">
                                <div class="col-sm-8">
                                    <button type="submit" class="btn btn-primary">Ajouter</button>
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
