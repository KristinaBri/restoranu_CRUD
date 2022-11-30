@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Koreguoti restoraną</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('restaurants.update', $restaurant->id) }}">
                            @csrf
                            @method("PUT")
                            <div class="mb-3">
                                <label class="form-label">Pavadinimas</label>
                                <input type="text" class="form-control" name="name" value="{{ $restaurant->name }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Miestas</label>
                                <input type="text" class="form-control" name="city" value="{{ $restaurant->city }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Adresas</label>
                                <input type="text" class="form-control" name="address" value="{{ $restaurant->address }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Darbo laikas</label>
                                <input type="text" class="form-control" name="work_time" value="{{ $restaurant->work_time }}">
                            </div>
                            <button class="btn btn-dark">Išsaugoti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

