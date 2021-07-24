@extends('layouts.hello')
<style>
  th{
    background-color:black;
    color:white;
    padding:5px 30px;
  }
  td{
    border:1px; solid black;
    padding:5px 30px;
    text-align:center;
  }
</style>
@section('title', 'find.blade.php')

@section('content')
<form action="find" method="post">
  @csrf
  <input type="text" name="input" value="{{$input}}">
  <input type="submit" value="見つける">
</form>
@if(@isset($item))
<table>
  <tr>
    <th>Data</th>
  </tr>
  <tr>
    <td>
      {{$item->getData()}}
    </td>
  </tr>
</table>
@endif
@endsection