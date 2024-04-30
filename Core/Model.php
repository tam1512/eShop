<?php 
namespace System\Core;
class Model extends Database{
   protected $db;
   public function __construct() {
      $dbHost = getEnv('DB_HOST');
      $dbName = getEnv('DB_DATABASE');
      $dbPort = getEnv('DB_PORT');
      $dbUser = getEnv('DB_USERNAME');
      $dbPass = getEnv('DB_PASSWORD');
      $dbDriver = getEnv('DB_DRIVER');

      $configs = compact('dbHost', 'dbName', 'dbPort', 'dbUser', 'dbPass', 'dbDriver');

      $this->db = new Database($configs);
   }
}