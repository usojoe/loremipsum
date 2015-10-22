@extends("layouts.master")

@section('displayusers')

<br><br><br><br><br><br><br><br>

@foreach ($allprofiles as $singleprofile)

    @foreach ($singleprofile as $data)

    {{ $data }}    <br>

    @endforeach
                  <br><br>
@endforeach

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@stop
