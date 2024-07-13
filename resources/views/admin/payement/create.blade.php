@extends('admin.layout')

@section('content')
    <div class="pagetitle">
        <h1>Payements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item active">Ajouter des payements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section">
        <div class="row">
            <div class="col-lg-12">
                <div class="card new-consignateur-form">
                    <div class="card-body">
                        <h5 class="card-title">Ajouter des payements</h5>
                        <!-- General Form Elements -->
                        <form class="" action="{{ route('payement.create') }}" method="post">
                            @csrf
                            <div class="mb-3">
                                <label for="" class="form-label">Références</label>
                                <input type="number" name="reference" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Type</label>
                                <select name="type" id="" class="form-control">
                                    <option>--Choisir--</option>
                                    <option value="Flooz">Flooz</option>
                                    <option value="T-money">T-money</option>
                                    <option value="Western union">Western union</option>
                                    <option value="Money Gram">Money Gram</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Evènement</label>
                                <select name="evenement_id" id="" class="form-control">
                                    <option>--Choisir--</option>
                                    @foreach($evenements as $evenement)
                                    <option value="{{ $evenement->id }}">{{ $evenement->libelle }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="" class="form-label">Montant</label>
                                <input type="number" name="montant" class="form-control">
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
