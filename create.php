<?php

$name=$_POST["name"];
$food=$_POST["food"];
$deadline=$_POST["deadline"];

$write_data="{$deadline} {$name} {$food}\n";

$file = fopen('data/todo.txt', 'a');

flock($file,LOCK_EX);

fwrite($file,$write_data);

flock($file,LOCK_UN);

fclose($file);

header("Location:input.php");
