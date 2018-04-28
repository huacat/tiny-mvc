<?php

$conf = [
    'host' => 'smtp.mail.com',
    'username' => 'foo@mail.com',
    'password' => 'password',
    'secure' => ''
];

return file_exists($local = __DIR__.'/mail-local.php') ? array_merge($conf, include $local) : $conf;