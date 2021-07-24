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
    text-align:center;
  }
</style>
@section('title', 'session.blade.php')

@section('content')
<p>{{$session_data}}</p>
  <form action="/session" method="post">
    @csrf
    <input type="text" name="input">
    <button>送信</button>
  </form>
  @endsection