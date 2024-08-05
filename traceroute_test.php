<?php
$ip = '198.143.164.251';
$traceroute = shell_exec("traceroute $ip");
echo "<pre>$traceroute</pre>";
?>
