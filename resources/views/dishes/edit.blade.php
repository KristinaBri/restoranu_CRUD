@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Koreguoti patiekalą</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('dishes.update', $dish->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method("PUT")
                            <div class="mb-3">
                                <label class="form-label">Nuotrauka</label>
                                <input type="file" class="form-control" name="image" value="{{ $dish->img }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Pavadinimas</label>
                                <input type="text" class="form-control" name="name" value="{{ $dish->name }}">
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Kaina</label>
                                <input type="text" class="form-control" name="price" value="{{ $dish->price }}">
                            </div>


                            <div  class="mb-3">
                                <label class="form-label">Restoranas</label>
                                <select class="form-control" name="restaurant_id" >
                                    @foreach($restaurants as $restaurant)
                                        <option value="{{$restaurant->id}}" @selected(old('restaurant_id')==$restaurant->id)>{{$restaurant->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="mb-3">
                            <label for="" class="form-label mx-2">Nuotrauka</label>
                            <input type="file" class="form-control" name="img">
                            </div>
                            <button class="btn btn-dark">Išsaugoti</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
