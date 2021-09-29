@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Unique plant edit</div>
                <div class="card-body">
                    <form method="POST" action="{{route('uniquPlant.update')}}">
                        <div class="form-group">
                            <label>Age</label>
                            <input type="text" name="age" class="form-control" value="{{old('age'),$uniquePlant->age}}">
                            <small class="form-text text-muted">Unique plant age.</small>
                        </div>
                        <div class="form-group">
                            <label>Height</label>
                            <input type="text" name="height" class="form-control" value="{{old('height'),$uniquePlant->height}}}">
                            <small class="form-text text-muted">Unique plant height .</small>
                        </div>
                        <div class="form-group">
                            <label>Health</label>
                            <input type="text" name="health" class="form-control" value="{{old('health'),$uniquePlant->health}}">
                            <small class="form-text text-muted">Unique plant health.</small>
                        </div>
                        <select name="plant_id">
                            @foreach ($plants as $plant)
                            <option value="{{$plant->id}}">{{$plant->name}}</option>
                            @endforeach
                        </select>
                        @csrf
                        <button class="btn btn-primary" type="submit">ADD</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection