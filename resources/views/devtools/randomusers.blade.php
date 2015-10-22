@extends("layouts.master")

@section('displayusers')

<br><br><br><br><br><br><br><br>

@foreach ($singleprofile as $singleprofile)

<h4>Name: {{ $singleprofile }}</h4>

@endforeach

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@stop
