@extends('layouts.hello')
<style>
  th{
    background-color:black;
    color:white;
    padding:5px 30px;
  }
  td{
    brder:1px solid black;
    padding: 5px 30px;
    text-align:center;
  }
  button{
    padding:10px 20px;
    background: black;
    color:white;
  }
</style>
@section('title', 'delete.blade.php')

@section('content')
<form action="/delete" method="post">
  <table>
    @csrf
    <input type="hidden" name="id" value="{{$form->id}}">
    <tr>
      <th>
        name
      </th>
      <td>
        {{$form->name}}
      </td>
    </tr>
    <tr>
      <th>
        age
      </th>
      <td>
        {{$form->age}}
      </td>
    </tr>
  </table>
  <button>送信</button>
</form>
@endsection