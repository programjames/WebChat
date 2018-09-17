<?php
$fp=fopen("log.html","a");
fwrite($fp,"<p>"+$_POST['message']+"</p>");
fclose($fp);
?>