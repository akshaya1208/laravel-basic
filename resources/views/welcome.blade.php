
@extends('layout')
@section('title',"Home")
@section('mainContent')
    <h1>HOME</h1>
    {{$message}}
    @foreach ($names as $nam)
       <li>{{$nam}} </li>  
    @endforeach

    @if (1==1)
    <div>
        yes
    </div>
    @else
    <div>
        no
    </div>
    @endif

    <form action="/result" method="POST">
        @csrf
        <input type="text" name="name">
        <input type="email" name="email">
        <button type="submit">SUBMIT</button>
    </form>


  
@endsection