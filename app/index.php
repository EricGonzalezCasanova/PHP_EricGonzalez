<?php

require 'config.php';

require 'app/helpers.php';

require 'app/Task.php';

$dbh = connectDB($config);

$statement = $dbh->prepare('SELECT * FROM tasks');

$statement->execute();

$tasks = $statement->FetchAll(PDO::FETCH_CLASS,'Task');

$greeting = greet();
