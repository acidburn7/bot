<?php

declare(strict_types=1);


const TOKEN = "5637461634:AAHxioQKmCfe10LNsD2b0ggfy0H7AnV4gMY";
const BASE_URL = "https://api.telegram.org/bot".TOKEN."/";

function debug($data) {
    echo '<pre>';
    print_r($data);
    echo '</pre>';
}

$res = json_decode(file_get_contents(BASE_URL."getUpdates"));
debug($res);

?>