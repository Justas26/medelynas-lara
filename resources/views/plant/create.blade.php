@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Plant create</div>
                <div class="card-body">
                    <form method="POST" action="{{route('plant.store')}}">
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{old('name')}}">
                            <small class="form-text text-muted"> plant name.</small>
                        </div>
                        <div class="form-group">
                            <label>Is_yearling</label>
                            <input type="text" name="is_yearling" class="form-control" value="{{old('is_yearling')}}">
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


