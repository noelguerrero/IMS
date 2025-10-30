<?php
    namespace app\models;
    use app\core\Database;

    class User extends Database
    {
        protected $table = 'users';

        public function findByUsername($username)
        {
            $this->iniDb();
            $stmt = $this->connection->prepare("SELECT * FROM {$this->table} WHERE email = :email");
            $stmt->bindParam(':email', $username);
            $stmt->execute();
            return $stmt->fetch();
        }

        public function getUserById($id)
        {
            $this->iniDb();
            $stmt = $this->connection->prepare("SELECT * FROM {$this->table} WHERE user_id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        }

        public function getUserEmailById($id)
        {
            $this->iniDb();
            $stmt = $this->connection->prepare("SELECT email FROM {$this->table} WHERE user_id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetchColumn();
        }

        public function checkEmailAvailability($email)
        {
            $this->iniDb();
            $stmt = $this->connection->prepare("SELECT * FROM {$this->table} WHERE email = :email");
            $stmt->bindParam(':email', $email);
            $stmt->execute();
            return $stmt->rowCount() === 0 ? true : false;
        }

        public function addUser($data)
        {
            $this->iniDb();
            $stmt = $this->connection->prepare("INSERT INTO {$this->table} SET first_name = :first_name, last_name = :last_name, email = :email, password = :password, created_at = NOW(), updated_at = NOW()");
            $stmt->bindParam(':first_name', $data['first_name']);
            $stmt->bindParam(':last_name', $data['last_name']);
            $stmt->bindParam(':email', $data['email']);
            $stmt->bindParam(':password', $data['password']);
            return $stmt->execute();
        }

        public function checkImportation()
        {
            var_dump("User is imported");
            die();
        }
        
        // Fetch all users
        public function getAllUsers()
        {
            $this->iniDb();
            $stmt = $this->connection->prepare("SELECT * FROM {$this->table}");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function deleteUser($id)
        {
            $this->iniDb();
            $stmt = $this->connection->prepare("DELETE FROM {$this->table} WHERE user_id = :id");
            $stmt->bindParam(':id', $id);
            return $stmt->execute();
        }  

        public function updateUser($id, $data)
        {
            $this->iniDb();
            $stmt = $this->connection->prepare("UPDATE {$this->table} SET first_name = :first_name, last_name = :last_name, email = :email, updated_at = NOW() WHERE user_id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':first_name', $data['first_name']);
            $stmt->bindParam(':last_name', $data['last_name']);
            $stmt->bindParam(':email', $data['email']);
            return $stmt->execute();
        }
    }
?>