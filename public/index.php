<?php


/*
|---------------------------------------------------------------------
| Register the autoloader
|---------------------------------------------------------------------
|
| Load hte autoloader that will generated class that will be used
 */
require __DIR__ . '/../vendor/autoload.php';

/*
|---------------------------------------------------------------------
| Bootstrap the application
|---------------------------------------------------------------------
|
| Bootstrap the application and do action from framework
 */
require __DIR__ . '/../bootstrap/app.php';

/*
|---------------------------------------------------------------------
| Run the application
|---------------------------------------------------------------------
|
| Handle the request and send response
 */
$app = Application::run();

