@extends('layout.format')
@section('body')
<h2>Add student</h2>
<form action="" method="post">
    @csrf
    <div>
        <label for="">Your Name</label>
        <input type="text" name="name">
    </div>
    <div>
        <label for="">Your Age</label>
        <input type="text" name="tuoi">
    </div>
    <button type="submit">Gửi</button>
    
</form>
@endsection