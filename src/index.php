<?php

ini_set('display_errors', 1);
require_once __DIR__ . '/../vendor/autoload.php';

use Bishal\Testpackage\controller\TestController;

$test = new TestController();
$test->renderFakeJson('https://jsonplaceholder.typicode.com/posts');



