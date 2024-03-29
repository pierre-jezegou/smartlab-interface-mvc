<?php
//site name
define('SITE_NAME', 'smartlab');

//App Root
define('APP_ROOT', dirname(dirname(__FILE__)));
define('URL_ROOT', '/');
define('URL_SUBFOLDER', '');

//DB Params
define('DB_HOST', '10.17.6.12');
define('DB_USERNAME', 'smartlab');
define('DB_PASSWORD', 'SmartLab2022');
define('DB_NAME', 'smartlab');
define('API_URL', 'http://api:8000');


function connect_database(){
    $dsn = "mysql:dbname=".DB_NAME."; host=".DB_HOST;
    try{
        // echo $dsn;
        $pdo=new PDO($dsn,DB_USERNAME,DB_PASSWORD);
      }
      catch(PDOException $e){
        printf("Échec de la connexion : %s\n", $e->getMessage());
        exit();
      }
    return $pdo;
}


function close_pdo(PDO $pdo){
    return $pdo = null;
}
