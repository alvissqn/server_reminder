<?php 
$time_input = date_create('21:50:00');
//$date = DateTime::createFromFormat( 'H:i:s', $time_input);
$formatted = date_format( $time_input,'H:i');
echo $formatted;
 ?>