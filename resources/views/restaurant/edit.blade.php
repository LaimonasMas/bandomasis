<form method="POST" action="{{route('restaurant.update',[$restaurant])}}">
   Title: <input type="text" name="restaurant_title" value="{{$restaurant->title}}">
   Customers: <input type="text" name="restaurant_customers" value="{{$restaurant->customers}}">
   Employees: <input type="text" name="restaurant_employees" value="{{$restaurant->employees}}">
      <select name="menu_id">
       @foreach ($menus as $menu)
           <option value="{{$menu->id}}">{{$menu->title}}</option>
       @endforeach
</select>
   @csrf
   <button type="submit">EDIT</button>
</form>