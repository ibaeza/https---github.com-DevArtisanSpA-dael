@extends('dashboard.master')

@section('content')

@include('dashboard.partials.validation-error')
  
<form action="{{ route("user.update",$user->id)}}" method="POST">
    @method('PUT')
    {{'Editando post id: '.$user->id}}
    @include('dashboard.user._form',['pasw'=>false])
</form>

@endsection