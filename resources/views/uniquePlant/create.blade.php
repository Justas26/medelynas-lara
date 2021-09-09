<form method="POST" action="{{route('uniquePlant.store')}}">
    Age: <input type="text" name="age">
    Height: <input type="text" name="height">
    Health: <input type="text" name="health">
    <select name="plant_id">
        @foreach ($plants as $plant)
        <option value="{{$plant->id}}">{{$plant->name}} {{$plant->is_yearling}}</option>
        @endforeach
    </select>
    @csrf
    <button type="submit">ADD</button>
</form>