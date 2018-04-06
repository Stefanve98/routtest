<?php

$route->add('/test', 'TestController', 'index');
$route->add('/test/{id}/update/message/{id}', 'TestController', 'xxx');
$route->add('/test/{id}', 'TestController', 'view');
$route->add('/test/create', 'TestController', 'test');
