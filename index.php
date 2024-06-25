<?php 

//refactoring
require 'functions.php';

//require 'router.php';

require 'Database.php';

$config = require('config.php');





  
$db = new Database($config['database']);

$students = $db->query("select * from students")->fetchAll();

dd($students);


//foreach ($students as $student){
//
//  echo "<li>" . $student['name'] . "</li>";
//}

