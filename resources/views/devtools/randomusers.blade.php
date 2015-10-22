@extends("layouts.master")

@section('displayusers')

<br><br><br><br><br><br><br><br>


@if (isset($singleprofile))
         @foreach ($singleprofile as $usr)
             <p> {{ $usr }} </p>
         @endforeach
 @endif



<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

@stop
