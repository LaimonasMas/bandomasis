@foreach ($menus as $menu)
Title: {{$menu->title}}
Price: {{$menu->price}}
Weight: {{$menu->weight}}
Meat: {{$menu->meat}}
About: {{$menu->about}}
<a class="btn btn-outline-secondary btn-sm" href="{{route('menu.edit',[$menu])}}">EDIT</a>
<form method="POST" action="{{route('menu.destroy', [$menu])}}">
    @csrf
    <button type="submit">DELETE</button>
</form>
<br>
@endforeach

