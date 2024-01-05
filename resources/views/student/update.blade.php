@extends('layout.format')
@section('body')
<h2>Update student</h2>
<form action="" method="post">
    @csrf
    <div>
        <label for="">Your Name</label>
        <input type="text" name="name" value="{{$data->name}}">
    </div>
    <div>
        <label for="">Your Age</label>
        <input type="text" name="tuoi" value="{{$data->tuoi}}">
    </div>
    <button type="submit">Gửi</button>
    
</form>
@endsection