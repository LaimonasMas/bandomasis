@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Menu</div>

                <div class="card-body">

                    <form method="POST" action="{{route('menu.update',[$menu->id])}}">
                        <div class="form-group">
                            <label>Title: </label>
                            <input type="text" class="form-control" name="menu_title" value="{{$menu->title}}">
                            <small class="form-text text-muted">You can edit Menu Title here</small>
                        </div>
                        <div class="form-group">
                            <label>Price: </label>
                            <input type="text" class="form-control" name="menu_price" value="{{$menu->price}}">
                            <small class="form-text text-muted">You can edit Price here</small>
                        </div>
                        <div class="form-group">
                            <label>Weight: </label>
                            <input type="text" class="form-control" name="menu_weight" value="{{$menu->weight}}">
                            <small class="form-text text-muted">You can edit general Weight here</small>
                        </div>
                        <div class="form-group">
                            <label>Meat: </label>
                            <input type="text" class="form-control" name="menu_meat" value="{{$menu->meat}}">
                            <small class="form-text text-muted">You can edit Meat Weight here</small>
                        </div>
                        <div class="form-group">
                            <label>About the menu: </label>
                            <textarea class="form-control" id="summernote" name="menu_about">{{$menu->about}}</textarea>
                            <small class="form-text text-muted">You can edit description here</small>
                        </div>
                        @csrf
                        <button class="btn btn-outline-secondary btn-sm" type="submit">EDIT</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
<script>
$(document).ready(function() {
   $('#summernote').summernote();
 });
</script>
@endsection
