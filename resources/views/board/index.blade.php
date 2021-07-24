@extends('layouts.hello')
<style>
  th{
    background-color:black;
    color:white;
    padding:5px 30px;
  }
  td{
    border:1px solid black;
    padding:5px 30px;
    text-align: center;
  }
</style>
@section('title', 'board.index.blade.php')

@section('content')
<table>
  <tr>
    <th>Message</th>
    <th>Name</th>
  </tr>
  @foreach($items as $item)
  <tr>
    <td>{{$item->message}}</td>
    <td>{{$item->person->name}}</td>
  </tr>
  @endforeach
</table>
@endsection