@extends('layouts.hello')

@section('title', 'auth.blade.php')

@section('content')
<p>{{$message}}</p>
<form action="/person/auth" method="post">
  <table>
  @csrf
    <tr>
      <th>mail:</th>
      <td><input type="email" name="email"></td>
    </tr>
    <tr>
      <th>pass:</th>
      <td><input type="password" name="password"></td>
    </tr>
    <tr>
      <th></th>
      <td><input type="submit" value="send"></td>
    </tr>
  </table>
</form>
@endsection