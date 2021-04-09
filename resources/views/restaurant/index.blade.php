@foreach ($restaurants as $restaurant)
Title: {{$restaurant->title}}
Customers: {{$restaurant->customers}}
Employees: {{$restaurant->employees}}
Menu name: {{$restaurant->restaurantMenu->title}}
<a class="btn btn-outline-secondary btn-sm" href="{{route('restaurant.edit',[$restaurant])}}">EDIT</a>
<form method="POST" action="{{route('restaurant.destroy', [$restaurant])}}">
    @csrf
    <button type="submit">DELETE</button>
</form>
<br>
@endforeach


