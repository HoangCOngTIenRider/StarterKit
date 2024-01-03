@extends('layout.format')
@section('body')
    <form method="POST">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">

        <select name="status" id="">
            <option value="1">Giá trị 1</option>
            <option value="2"> Giá trị 2</option>
        </select>
        <button class="btn btn-success" type="submit">Submit</button>
    </form>
@endsection