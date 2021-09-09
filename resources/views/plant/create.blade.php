<form method="POST" action="{{route('plant.store')}}">
    name: <input type="text" name="name">
    is_yearling:<input type="checkbox" name="is_yearling" checked="">
    @csrf
    <button type="submit">ADD</button>
</form>