<?php
    namespace app\core;
    use PDO;
    use PDOException;

    class Database
    {
        //Database Configuration
        protected $host = 'localhost';
        protected $port = '3306';
        protected $dbname = 'ims';
        protected $username = 'root';
        protected $password = '';

        // SQL variable
        public $connection;
        public $statement;

        public function iniDb()
        {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};port={$this->port}";

            try
            {
                $this->connection = new PDO($dsn, $this->username, $this->password, [
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
                ]);
                return $this->connection;
            }
            catch (PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
            }
        }
    }
?>