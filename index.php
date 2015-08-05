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
session_start();
require 'config.php';
require 'DB.php';

require 'vendor/autoload.php';

\Slim\Slim::registerAutoloader();

$app = new \Slim\Slim(array(
    'debug' => false,
));

$app->contentType('application/json');

$app->error(function (Exception $e = null) use ($app) {
    echo '{"error":{"text":"'.$e->getMessage().'"}}';
});

function formatJson($obj)
{
    echo json_encode($obj);
}

//Includes
include 'customer.php';

$app->run();
