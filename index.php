<?php

chdir(dirname(__DIR__));

setlocale(LC_ALL, 'pt_BR', 'ptb');
function pre($data, $die = true)
{
    echo '<pre>';
    print_r($data);
    echo '</pre>';

    if ($die) {
        die();
    }
}

require 'vendor/autoload.php';
