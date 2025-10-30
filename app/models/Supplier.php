<?php
    namespace app\models;
    use app\core\Database;

    class Supplier extends Database
    {
        protected $table = 'suppliers';

        public function checkSupplierModel()
        {
            var_dump("Supplier model is imported");
            die();
        }

        public function getSupplierById($id)
        {
            $this->iniDb();
            $stmt = $this->connection->prepare("SELECT * FROM {$this->table} WHERE supplier_id = :id");
            $stmt->bindParam(':id', $id);
            $stmt->execute();
            return $stmt->fetch();
        }

        public function getAllSuppliers()
        {
            $this->iniDb();
            $stmt = $this->connection->prepare("SELECT * FROM {$this->table}");
            $stmt->execute();
            return $stmt->fetchAll();
        }

        public function checkSupplierEmailAvailability($SupplierEmail)
        {
            $this->iniDb();
            $stmt = $this->connection->prepare("SELECT * FROM {$this->table} WHERE supplier_email = :supplier_email");
            $stmt->bindParam(':supplier_email', $email);
            $stmt->execute();
            return $stmt->rowCount() === 0 ? true : false;
        }

        public function addSupplier($data)
        {
            $this->iniDb();
            $stmt = $this->connection->prepare("INSERT INTO {$this->table} SET supplier_name = :supplier_name, supplier_location = :supplier_location, supplier_email = :supplier_email, created_by = :created_by, created_at = NOW(), updated_at = NOW()");
            $stmt->bindparam(':supplier_name', $data['supplier_name']);
            $stmt->bindparam(':supplier_location', $data['supplier_location']);
            $stmt->bindparam(':supplier_email', $data['supplier_email']);
            $stmt->bindparam(':created_by', $data['created_by']);
            return $stmt->execute();
        }
    }
?>