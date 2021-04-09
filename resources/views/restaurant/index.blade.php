@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Restaurants List</div>

                <div class="card-body">

                    @foreach ($restaurants as $restaurant)
                    <li class="list-group-item list-line">
                        <div>
                            <h4>Restaurant: {{$restaurant->title}}</h4>
                            <h5>Customers: {{$restaurant->customers}}</h5>
                            <h5>Employees: {{$restaurant->employees}}</h5>
                            <h5>Menu: {{$restaurant->restaurantMenu->title}}</h5>
                        </div>
                        <div class="list-line__buttons">
                            <div class="form-group">
                                <a class="btn btn-outline-secondary btn-sm" href="{{route('restaurant.edit',[$restaurant])}}">EDIT</a>
                            </div>
                            <form method="POST" action="{{route('restaurant.destroy', [$restaurant])}}">
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm">DELETE</button>
                            </form>
                        </div>
                    </li>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
