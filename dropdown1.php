<?php

$pune = array("Jaipur", "Mumbai","Goa","Nagpur");
$Mumbai = array("Jaipur", "Pune","Goa","Nagpur");

$ct = $_REQUEST["city1"];

switch($ct)
{
	case Pune:
	echo "<option>"."Jaipur"."</option>" ;
?>