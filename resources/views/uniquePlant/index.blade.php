@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Unique plant list</div>
                <div class="card-body">
                    <table class="table" >
                        <tr>
                            <th>Age</th>
                            <th>Height</th>
                            <th>Health</th>
                            <th>Edit</th>
                            <th>Delete</th>        
                        </tr>
                        @foreach ($uniquePlants as $uniquePlant)
                        <tr>
                            <td>{{$uniquePlant->age}}</td>
                            <td>{{$uniquePlant->height}}}</td>
                            <td>{{$uniquePlant->health}}</td>
                            <td>
                              <a class="btn btn-primary" href="{{route('uniquePlant.edit',$uniquePlant)}}">edit</a>
                            </td>
                            <td>
                            <form method="POST" action="{{route('uniquePlant.destroy', [$uniquePlant])}}">
                             @csrf
                            <button type="submit">DELETE</button>
                            </form>
                            </td>
                            <br>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
