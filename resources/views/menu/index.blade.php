@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Menus List</div>

                <div class="card-body">

                    @foreach ($menus as $menu)
                    <li class="list-group-item list-line">
                        <div>
                            <h4>Menu title: {{$menu->title}}</h4>
                            <h5>Price: {{$menu->price}} Eur</h5>
                            <h5>Weight: {{$menu->weight}} g</h5>
                            <h5>Meat: {{$menu->meat}} g</h5>
                            <h5>About: {!!$menu->about!!}</h5>
                        </div>
                        <div class="list-line__buttons">
                            <div class="form-group">
                                <a class="btn btn-outline-secondary btn-sm" href="{{route('menu.edit',[$menu])}}">EDIT</a>
                            </div>
                            <form method="POST" action="{{route('menu.destroy', [$menu])}}">
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
