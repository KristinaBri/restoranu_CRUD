@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Naujas restoranas</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('restaurants.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Pavadinimas</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Miestas</label>
                                <input type="text" class="form-control" name="city">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Adresas</label>
                                <input type="text" class="form-control" name="address">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Darbo laikas</label>
                                <input type="text" class="form-control" name="work_time">
                            </div>
                            <button class="btn btn-dark me-3">Pridėti</button>
                            <a href="{{route('restaurants.index')}}" class="btn btn-light btn-outline-info">Atgal</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
