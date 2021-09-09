<form method="POST" action="{{route('plant.store')}}">
    name: <input type="text" name="name">
    @if($plant->is_yearling)
    is_yearling:<input type="checkbox" name="is_yearling" checked="">

    @endif
    @csrf
    <button type="submit">ADD</button>
</form>