<form method="POST" action="{{route('restaurant.store')}}">
    Title: <input type="text" name="restaurant_title">
    Customers: <input type="text" name="restaurant_customers">
    Employees: <input type="text" name="restaurant_employees">
    <select name="menu_id">
        @foreach ($menus as $menu)
        <option value="{{$menu->id}}">{{$menu->title}}</option>
        @endforeach
    </select>
    @csrf
    <button type="submit">ADD</button>
</form>
