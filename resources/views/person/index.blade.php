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
@section('title', 'person.index.blade.php')

@section('content')
<table>
  <tr>
    <th>Person</th>
    <th>Board</th>
  </tr>
  @foreach($hasItems as $item)
  <tr>
    <td>
      {{$item->getData()}}
    </td>
    <td>
      <table>
        @foreach($item->boards as $obj)
        <tr>
          <td>{{$obj->getData()}}</td>
        </tr>
        @endforeach
      </table>
    </td>
  </tr>
  @endforeach
</table>
<table>
  <tr>
    <th>Person</th>
  </tr>
  @foreach($noItems as $item)
  <tr>
    <td>{{$item->getData()}}</td>
  </tr>
    @endforeach
</table>
@endsection