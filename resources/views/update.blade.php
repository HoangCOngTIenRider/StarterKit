@extends('layout.format')
@section('body')
    <form method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{$data->name}}">

        <select name="status" id="">
            <option {{$data->status==1?'selected':''}} value="1">Giá trị 1</option>
            <option {{$data->status==0?'selected':''}} value="0"> Giá trị 0</option>
        </select>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
@endsection