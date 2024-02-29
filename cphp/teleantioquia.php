<?php
$lista_principal = file_get_contents("https://tecnibrain.github.io/iptv.github.io/list.m3u");
$lista_secundaria = file_get_contents("https://tecnibrain.github.io/iptv.github.io/canales/Teleantioquia.m3u8");

header("Content-Type: application/vnd.apple.mpegurl");
echo $lista_principal . "\n" . $lista_secundaria;
?>