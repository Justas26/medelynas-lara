@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Plant list</div>
                <div class="card-body">
                    <table class="table" >
                        <tr>
                            <th>Name</th>
                            <th>Is_yearling</th>
                            <th>Edit</th>
                            <th>Delete</th>        
                        </tr>
                        @foreach ($plants as $plant)
                        <tr>
                            <td>{{plant->name}}</td>
                            <td>{{$plant->is_yearling}}}</td>
                            <td>
                              <a class="btn btn-primary" href="{{route('plant.edit',$plant)}}">edit</a>
                            </td>
                            <td>
                            <form method="POST" action="{{route('plant.destroy', $plant)}}">
                             @csrf
                            <button type="submit">delete</button>
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
