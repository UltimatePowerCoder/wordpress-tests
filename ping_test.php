<?php
$ip = '198.143.164.251';
$ping = shell_exec("ping -c 4 $ip");
echo "<pre>$ping</pre>";
?>
