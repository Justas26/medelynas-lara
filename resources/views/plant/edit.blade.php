<form method="POST" action="{{route('plant.update',$plant)}}">
    name: <input type="text" name="name" value="{{$plant->name}}">
    is_yearling: <input type="checkbox" name="is_yearling" value="{{$plant->is_yearling}}">
    @csrf
    <button type="submit">EDIT</button>
</form>