@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Restoranai</div>

                    <div class="card-body">
                        <a href="{{route('restaurants.create')}}" class="btn btn-dark">➕ Pridėti</a>
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Pavadinimas</th>
                                <th>Miestas</th>
                                <th>Adresas</th>
                                <th>Darbo laikas</th>
                                <th></th>
                                <th colspan="2">Veiksmai</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($restaurants as $restaurant)
                                <tr>
                                    <td>{{ $restaurant->name }}</td>
                                    <td>{{ $restaurant->city }}</td>
                                    <td>{{ $restaurant->address }}</td>
                                    <td>{{ $restaurant->work_time }}</td>
                                    <td>
                                        <a href="{{ route('restaurantDishes',$restaurant->id) }}" class="btn btn-success">Patiekalai</a>
                                    </td>
                                    <td>
                                        <a href="{{route('restaurants.edit', $restaurant->id)}}" class="btn btn-dark">Redaguoti</a>
                                    </td>
                                    <td>
                                        <form action="{{ route('restaurants.destroy', $restaurant->id) }}" method="post">
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


