@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Menu</div>

                <div class="card-body">

                    <form method="POST" action="{{route('menu.store')}}">
                        <div class="form-group">
                            <label>Title: </label>
                            <input type="text" class="form-control" name="menu_title" value="{{old('menu_title')}}">
                            <small class="form-text text-muted">Please enter Menu Title here</small>
                        </div>
                        <div class="form-group">
                            <label>Price: </label>
                            <input type="text" class="form-control" name="menu_price" value="{{old('menu_price')}}">
                            <small class="form-text text-muted">Please enter Price here</small>
                        </div>
                        <div class="form-group">
                            <label>Weight: </label>
                            <input type="text" class="form-control" name="menu_weight" value="{{old('menu_weight')}}">
                            <small class="form-text text-muted">Please enter general Weight here</small>
                        </div>
                        <div class="form-group">
                            <label>Meat: </label>
                            <input type="text" class="form-control" name="menu_meat" value="{{old('menu_meat')}}">
                            <small class="form-text text-muted">Please enter Meat weight here</small>
                        </div>
                        <div class="form-group">
                            <label>About the menu: </label>
                            <textarea class="form-control" id="summernote" name="menu_about">{{old('menu_about')}}</textarea>
                            <small class="form-text text-muted">Please enter Menu description here</small>
                        </div>
                        @csrf
                        <button class="btn btn-outline-success btn-sm" type="submit">ADD</button>
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
