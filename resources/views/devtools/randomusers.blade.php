@extends("layouts.master")

@section('displayusers')

<p class="scrollbox">
              <?php
                  if (isset($numberofusers))
                      foreach ($numberofusers as $profile)
                          echo $profile . "<br><br>";
              ?>
          </p>

@stop
