<?php
$url = "https://ru.wordpress.org";
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, true);
curl_setopt($ch, CURLOPT_VERBOSE, true);
curl_setopt($ch, CURLOPT_STDERR, fopen('php://output', 'w'));
$response = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Ошибка cURL: ' . curl_error($ch);
}
$info = curl_getinfo($ch);
curl_close($ch);

echo "HTTP Code: " . $info['http_code'] . "<br>";
echo "Total Time: " . $info['total_time'] . " seconds<br>";
echo "<pre>" . htmlspecialchars($response) . "</pre>";
?>
