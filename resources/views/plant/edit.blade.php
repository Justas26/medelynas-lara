
@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Plant edit</div>
                <div class="card-body">
                    <form method="POST" action="{{route('plant.update')}}">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{old('name'),$plant->name}}">
                            <small class="form-text text-muted"> plant name.</small>
                        </div>
                        <div class="form-group">
                            <label>Is_yearling</label>
                            <input type="text" name="is_yearling" class="form-control" value="{{old('is_yearling'),$plant->is_yearling}}">
                            <small class="form-text text-muted"> plant type .</small>
                        </div>
                        @csrf
                        <button class="btn btn-primary" type="submit">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


<form method="POST" action="{{route('plant.update',$plant)}}">
    name: <input type="text" name="name" value="{{$plant->name}}">
    is_yearling: <input type="checkbox" name="is_yearling" value="{{$plant->is_yearling}}">
    @csrf
    <button type="submit">EDIT</button>
</form>