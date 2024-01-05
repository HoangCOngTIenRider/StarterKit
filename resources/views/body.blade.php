@extends('layout.format')
@section('body')
<h2>This is body</h2>
{{-- {{$data}} --}}
@foreach ($data as $item)

    <p>name:{{$item->name}}</p>  
    <p>age:{{$item->tuoi}}</p>    
    @endforeach
@endsection