<form action="{{route('tryIn')}}" method="post">
  {{ csrf_field() }}
  <input type="text" name="nama"><br>
  <input type="password" name="pass">
  <input type="submit">
</form>
