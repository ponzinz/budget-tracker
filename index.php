<?php

require 'functions.php';
require 'router.php';
require 'Database.php';

$config = require('config.php');
$db = new Database($config['database']);

$transactions = $db->query("select * from transactions")->fetchAll();

// dd($transactions);

// OUTPUT

    // array(1) {
    //     [0]=>
    //     array(8) {
    //       ["id"]=>
    //       int(1)
    //       ["amount"]=>
    //       float(10)
    //       ["date"]=>
    //       string(10) "2024-10-07"
    //       ["account"]=>
    //       string(8) "contanti"
    //       ["type"]=>
    //       string(6) "uscita"
    //       ["label_id"]=>
    //       int(1)
    //       ["category_id"]=>
    //       int(1)
    //       ["note"]=>
    //       string(5) "Pizza"
    //     }
    //   }