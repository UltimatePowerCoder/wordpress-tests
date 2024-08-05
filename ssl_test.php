<?php
$stream = stream_context_create(array(
    "ssl" => array(
        "capture_peer_cert" => true,
        "verify_peer" => false,
        "verify_peer_name" => false,
    )
));
$read = @stream_socket_client("ssl://ru.wordpress.org:443", $errno, $errstr, 30, STREAM_CLIENT_CONNECT, $stream);
$cont = stream_context_get_params($read);
$cert = openssl_x509_parse($cont["options"]["ssl"]["peer_certificate"]);
echo "<pre>" . print_r($cert, true) . "</pre>";
?>