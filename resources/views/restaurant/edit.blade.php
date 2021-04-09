@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Restaurant</div>

                <div class="card-body">

                    <form method="POST" action="{{route('restaurant.update',[$restaurant])}}">
                        <div class="form-group">
                            <label>Title: </label>
                            <input type="text" class="form-control" name="restaurant_title" value="{{$restaurant->title}}">
                            <small class="form-text text-muted">Please enter Restaurant Name here</small>
                        </div>
                        <div class="form-group">
                            <label>Customers: </label>
                            <input type="text" class="form-control" name="restaurant_customers" value="{{$restaurant->customers}}">
                            <small class="form-text text-muted">Please enter number of Customers here</small>
                        </div>
                        <div class="form-group">
                            <label>Employees: </label>
                            <input type="text" class="form-control" name="restaurant_employees" value="{{$restaurant->employees}}">
                            <small class="form-text text-muted">Please enter number of Employees here</small>
                        </div>
                        <div class="form-group">
                            <label>Menu: </label>
                            <select name="menu_id">
                                @foreach ($menus as $menu)
                                <option class="form-control" value="{{$menu->id}}">{{$menu->title}}</option>
                                @endforeach
                            </select>
                            <small class="form-text text-muted">Please choose the menu from the list above</small>
                        </div>
                        @csrf
                        <button class="btn btn-outline-secondary btn-sm" type="submit">EDIT</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
