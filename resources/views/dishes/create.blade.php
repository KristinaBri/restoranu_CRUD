@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Naujas patiekalas</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('dishes.store') }}">
                            @csrf
                            <div class="mb-3">
                                <label class="form-label">Nuotrauka</label>
                                <input type="text" class="form-control" name="img">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pavadinimas</label>
                                <input type="text" class="form-control" name="name">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kaina</label>
                                <input type="text" class="form-control" name="price">
                            </div>
                            <div  class="mb-3">
                                <label class="form-label">Restoranas</label>
                                <select class="form-control" name="restaurant_id" >
                                    @foreach($restaurants as $restaurant)
                                        <option value="{{$restaurant->id}}" @selected(old('restaurant_id')==$restaurant->id)>{{$restaurant->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <button class="btn btn-dark">Pridėti</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

