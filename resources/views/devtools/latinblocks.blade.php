@extends("layouts.master")

@section('displaylorem')

<p class="scrollbox">
              <?php
                  if (isset($blocks))
                      foreach ($blocks as $paragraph)
                          echo $paragraph . "<br><br>";
              ?>
          </p>

@stop
