<?php

$file = $_GET["filename"];
unlink('upload/'.$file);
header("Location: get-contents.php");

?>