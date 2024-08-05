<?php
$host = 'ru.wordpress.org';
$ip = gethostbyname($host);
if ($ip === $host) {
    echo "Не удалось разрешить доменное имя $host";
} else {
    echo "IP адрес $host: $ip";
}
?>
