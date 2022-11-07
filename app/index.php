<?php

require 'app/helpers.php';

require 'app/Task.php';

//$tasks = new Task(1,'comprar pa','a la panaderia',0);
//var_dump($tasks);

$user = 'debian-sys-maint';
$pass = '0oDmPGpFyDlgYVVd';

try {
    $dbh = new PDO('mysql:host=localhost;dbname=phplaraveldevs', $user, $pass);
} catch (\Exception $e){
    echo 'Error de connexió a la base de dades';
}

$statement = $dbh->prepare('SELECT * FROM tasks');

$statement->execute();

$tasks = $statement->FetchAll(PDO::FETCH_OBJ);

$greeting = greet();
