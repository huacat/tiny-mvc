<?php
$conf = [
    'driver'    => 'mysql',
    'host'      => 'localhost',
    'database'  => 'test',
    'username'  => 'root',
    'password'  => 'root',
    'charset'   => 'utf8',
    'collation' => 'utf8_general_ci',
    'prefix'    => ''
];

return file_exists($local = __DIR__.'/database-local.php') ? array_merge($conf, include $local) : $conf;