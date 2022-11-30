@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Patiekalai</div>

                    <div class="card-body">
                        <a href="{{route('dishes.create')}}" class="btn btn-dark">➕ Pridėti</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Nuotrauka</th>
                                <th>Pavadinimas</th>
                                <th>Kaina</th>
                                <th>Restoranas</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($dishes as $dish)
                                <tr>
                                    <td>
                                        <img src="{{ route('image.productImage',$dish->id) }}" style=" width: 200px;">
                                    </td>
                                    <td>{{ $dish->name }}</td>
                                    <td>{{ $dish->price }}</td>
                                    <td>{{ $dish->restaurant->name }}</td>
                                    <td>
                                        <a href="{{route('dishes.edit', $dish->id)}}" class="btn btn-dark">Redaguoti</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('dishes.destroy', $dish->id) }}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger">Ištrinti</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
