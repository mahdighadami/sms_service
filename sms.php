<?php
function readphones($filename){
    //TODO: read phones from the filename
    return explode("\n", file_get_contents($filename));
}



function send_sms($number, $text){
    //TODO: sen sms
}

$phones = readphones("phones.txt");
//var_dump($phones);
$text = "Hello, World";
foreach($phones as $phone){
    $phone = trim($phone);
    send_sms($phone, $text);
    echo $phone;?> <br> <?php ;
}
