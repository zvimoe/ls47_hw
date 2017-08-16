<?php
class Connection{
        private $host = '127.0.0.1';
        private $db   = 'northwind';
        private $user = 'root';
        private $pass = '';
        private $charset = 'utf8';
        private $dsn;
        private $opt = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        public function __construct(){

          $this->dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
         
        }

        public function insert($quary,$execute){
           $pdo = new PDO($this->dsn,$this->user,$this->pass,$this->opt);
           $stmt =$pdo->prepare($quary);
           $stmt->execute($execute);

        }
        public function get($quary){
            $pdo = new PDO($this->dsn, $this->user, $this->pass, $this->opt);
            $stmt = $pdo->prepare($quary);
            $stmt->execute();
           return $stmt;
                                


        }
}
?>