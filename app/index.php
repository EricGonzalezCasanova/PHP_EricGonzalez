<?php

use Framework\Database\Database;

require 'config.php';

require 'app/helpers.php';

require 'app/Models/Task.php';

require 'framework/Database/Database.php';

//PDO -> OOP


// WISHFUL PROGRAMMING
$database = new Database($config); // -> Laravel no utilitzem gairebé mai new -> DI i Container
$tasks = $database->selectAll('tasks');
//$tasks = $database->selectAll('tasks');


$greeting = greet();
