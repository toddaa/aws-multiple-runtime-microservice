<?php
date_default_timezone_set('America/Detroit');

require '/opt/autoload.php';

function handler($data){
	echo "Hello World.  Thanks for sending data through PHP.  Here is waht you send:";
	var_dump($data);
}