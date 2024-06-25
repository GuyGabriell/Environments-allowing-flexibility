<?php 


//connect to the database and execute a query.
//refactoring to make  the db($students) dynamic by turning it to a variable.


class Database {

  public $connection;
  

  public function __construct($config, $username = 'root', $password = '') {

    

    //As it's name suggest is actually use for building of query string 
    //example.com?foo=bar
    $dsn = 'mysql:' . http_build_query($config, '', ';'); 

    
  //$dsn = "mysql:host={$config ['host']};port={$config ['port']};dbname={$config 
  //['dbname']};charset={$config ['charset']}";
    
  $this->connection = new PDO($dsn, $username , $password, [

    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC 
  ]);

  }


  public function query($query) {

      
  $statement = $this->connection->prepare($query);
    
  $statement->execute();
    
  return $statement;

  }

} 