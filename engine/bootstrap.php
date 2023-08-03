<?php

require_once __DIR__ . '/../vendor/autoload.php';

use Engine\Cms;
use Engine\DI\DI;

try {
   // Dependency injection
   $di = new DI ();

   $di->set('test', ['db' => 'db_object']);
   $di->set('test2', ['mail' => 'mail_object']);

   $cms = new Cms($di);
   $cms->run();
   
}catch (\ErrorException $e) {
   echo $e->getMessage();
}
