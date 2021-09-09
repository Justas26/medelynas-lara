<form method="POST" action="{{route('uniquePlant.update',[$uniquePlant])}}">
    Title: <input type="text" name="age" value="{{$uniquePlant->age}}">
    ISBN: <input type="text" name="height" value="{{$uniquePlant->height}}">
    Pages: <input type="text" name="health" value="{{$uniquePlant->health}}">
    <select name="plant_id">
        @foreach ($plants as $plant)
        <option value="{{$plant->id}}" @if($author->id == $uniquePlant->plant_id) selected @endif>
            {{$plant->name}} {{$plant->is_yearling}}
        </option>
        @endforeach
    </select>
    @csrf
    <button type="submit">EDIT</button>
</form>