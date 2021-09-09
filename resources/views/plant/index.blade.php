@foreach ($plants as $plant)
<a href="{{route('plant.edit',[$plant])}}">{{$plant->name}} {{$plant->is_yearling}}</a>
<form method="POST" action="{{route('plant.destroy', $plant)}}">
    @csrf
    <button type="submit">DELETE</button>
</form>
<br>
@endforeach