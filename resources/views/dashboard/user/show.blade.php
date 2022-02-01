@extends('dashboard.master')
@section('content')

            <div class="form-group">
                <label for="name"> Nombre: </label>
                <input readonly class="form-control" type="text" name="name" id="name" value="{{$user->name}}">

            <div class="form-group">
                <label for="email"> Email: </label>
                <input readonly class="form-control" type="email" name="email" id="email" value="{{$user->email}}">

            </div><br />

@endsection