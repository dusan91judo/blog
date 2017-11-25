<?php
    $var = 5;
?>

@if(isset($var))
    {{ dd('Da') }}
@else
    {{ dd('Ne') }}
@endif
