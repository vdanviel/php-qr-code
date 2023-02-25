<?php

use chillerlan\QRCode\QRCode as QRcode;
use chillerlan\QRCode\QROptions;

require_once __DIR__.'/vendor/autoload.php';

$options = new QROptions(array(
    'scale' => 100,
    'eccLevel' => QRcode::ECC_L
));

$url = "https://chat.whatsapp.com/BR1JVfwIMO2I7PWO8KkCh1";

$img = "<img src='".(new QRcode($options))->render($url)."' alt='qrcode image'";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QRCODE</title>
</head>
<body>
    <?=$img?>    
</body>
</html>
