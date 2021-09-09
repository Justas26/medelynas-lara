@foreach ($uniquePlants as $uniquePlant)
<a href="{{route('uniquePlant.edit',[$uniquePlant])}}">{{$uniquePlant->age}} {{$uniquePlant->plantPlant->name}} {{$uniquePlant->plantPlant->is_yearling}}</a>
<form method="POST" action="{{route('uniquePlant.destroy', [$uniquePlant])}}">
    @csrf
    <button type="submit">DELETE</button>
</form>
<br>
@endforeach