<?php

require 'functions.php';

// Connect to the MySQL database.
$dsn = "mysql:host=localhost;port=3306;dbname=budget-tracker;user=root;password=root;charset=utf8mb4";

$pdo = new PDO($dsn);
$statement = $pdo->prepare("select * from transactions where id = 1");
$statement->execute();
$transactions = $statement->fetch(PDO::FETCH_ASSOC);
echo "<li>" . $transactions['id'] . "</li>";
echo "<li>" . $transactions['amount'] . " €" . "</li>";
echo "<li>" . $transactions['date'] . "</li>";
echo "<li>" . $transactions['account'] . "</li>";
echo "<li>" . $transactions['type'] . "</li>";
echo "<li>" . $transactions['note'] . "</li>";
