<?php

require 'app/helpers.php';

require 'app/Task.php';

//$user = 'debian-sys-maint';
//$pass = '0oDmPGpFyDlgYVVd';
//$dsn = 'mysql:host=localhost;dbname=phplaraveldevs';

$config = [
    'database' => [
        'user' => 'debian-sys-maint',
        'password' => '0oDmPGpFyDlgYVVd',
        'databasetype' => 'mysql',
        'host' => 'localhost',
        'name' => 'phplaraveldevs',
    ]
];

$user = $config['database']['user'];
$pass =  $config['database']['password'];
$type = $config['database']['databasetype'];
$host = $config['database']['host'];
$name = $config['database']['name'];
$dsn = "$type:host=$host;dbname=$name";

try {
    $dbh = new PDO($dsn, $user, $pass);
} catch (\Exception $e){
    echo 'Error de connexió a la base de dades';
}

$statement = $dbh->prepare('SELECT * FROM tasks');

$statement->execute();

$tasks = $statement->FetchAll(PDO::FETCH_CLASS,'Task');

$greeting = greet();
