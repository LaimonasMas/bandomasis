@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>Restaurants List</h2>

                    {{-- filtravimo pradzia --}}
                    <div class="make-inline">
                        <form action="{{route('restaurant.index')}}" method="get" class="make-inline">
                            <div class="form-group make-inline">
                                <label>Dish: </label>
                                <select class="form-control" name="menu_id">
                                    <option value="0" @if($filterBy==0) selected @endif>All Dishes</option>
                                    @foreach ($menus as $menu)
                                    <option value="{{$menu->id}}" @if($filterBy==$menu->id) selected @endif>
                                        {{$menu->title}}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <button type="submit" class="btn btn-outline-success btn-sm">Filter</button>
                        </form>
                        <a href="{{route('restaurant.index')}}" class="btn btn-outline-secondary btn-sm">Clear</a>
                    </div>
                    {{-- filtravimo ppabaiga --}}




                    <div class="card-body">

                        @foreach ($restaurants as $restaurant)
                        <li class="list-group-item list-line">
                            <div>
                                <h4>Restaurant: {{$restaurant->title}}</h4>
                                <h5>Customers: {{$restaurant->customers}}</h5>
                                <h5>Employees: {{$restaurant->employees}}</h5>
                                <h5>Dish: {{$restaurant->restaurantMenu->title}}</h5>
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
