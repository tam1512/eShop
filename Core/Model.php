<?php 
namespace System\Core;
class Model extends Database{
   protected $db;
   public function __construct() {
      $dbHost = $_ENV['DB_HOST'];
      $dbName = $_ENV['DB_DATABASE'];
      $dbPort = $_ENV['DB_PORT'];
      $dbUser = $_ENV['DB_USERNAME'];
      $dbPass = $_ENV['DB_PASSWORD'];
      $dbDriver = $_ENV['DB_DRIVER'];

      $configs = compact('dbHost', 'dbName', 'dbPort', 'dbUser', 'dbPass', 'dbDriver');

      $this->db = new Database($configs);
   }
}