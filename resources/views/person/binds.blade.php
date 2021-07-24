@extends('layouts.hello')
<style>
  th{
    background-color:black;
    color:white;
    padding:5px 30px;
  }
  td{
    border:1px solid black;
    padding: 5px 30px;
    text-align:center;
  }
</style>
@section('title', 'binds.index.blade.php')

@section('content')
  <p>Person</p>
  <table>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>AGE</th>
    </tr>
    <tr>
      <td>{{$item->id}}</td>
      <td>{{$item->name}}</td>
      <td>{{$item->age}}</td>
    </tr>
  </table>
  @endsection