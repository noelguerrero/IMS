<?php
    use app\models\Supplier;

    class AdminSupplierController
    {
        private $supplierModel;

        public function __construct()
        {
            $this->supplierModel = new Supplier();
        }

        public function index()
        {
            require __DIR__ . '/../views/admin/adminSupplierList.view.php';
        }

        public function loginUnable()
        {
            header("location: " . BASE_URL . "login");
            exit();
        }

        public function addSupplierForm()
        {
            require __DIR__ . '/../views/admin/adminSupplierAdd.view.php';   
        }

        public function addSupplier()
        {
            if($_SERVER['REQUEST_METHOD'] === 'POST')
            {
                $supplierName = trim($_POST['supplier_name']);
                $supplierLocation = trim($_POST['supplier_location']);
                $supplierEmail = trim($_POST['supplier_email']);
                $createdBy = $_SESSION['user']['id'];

                $inputChecker = $this->checkAddSupplierInput($supplierName, $supplierLocation, $supplierEmail, $createdBy);

                if($inputChecker === false)
                {
                    return $this->addSupplierForm();
                }

                $data = [
                    'supplier_name' => $supplierName,
                    'supplier_location' => $supplierLocation,
                    'supplier_email' => $supplierEmail,
                    'created_by' => $createdBy
                ];

                $result = $this->supplierModel->addSupplier($data);

                if($result)
                {
                    $_SESSION['add_supplier_form_message'] = 'successfully';
                    header('location: ' . BASE_URL . 'addSuppliers');
                    exit();
                }
                else    
                {
                    header('location: ' . BASE_URL . 'addSuppliers');
                    exit();
                }
            }
        }

        public function checkAddSupplierInput($supplierName, $supplierLocation, $supplierEmail, $createdBy)
        {
            $errors = [];
            
            if($supplierName === '' || empty($supplierName))
            {
                $errors['supplier_name'] = 'Supplier name is required';
            }

            if($supplierLocation === '' || empty($supplierLocation))
            {
                $errors['supplier_location'] = 'Supplier location is required';
            }

            if($supplierEmail === '' || empty($supplierEmail))
            {
                $errors['supplier_email'] = 'Supplier email is required';
            }
            else if(!filter_var($supplierEmail, FILTER_VALIDATE_EMAIL))
            {
                $errors['supplier_email'] = 'Please enter a valid email address';
            }
            else if($this->supplierModel->checkSupplierEmailAvailability($supplierEmail) === false)
            {
                $errors['supplier_email'] = 'Email is already taken';
            }

            if(!empty($errors))
            {
                $_SESSION['form_errors'] = $errors;
                $_SESSION['old_inputs'] = $_POST;

                return false;
            }
            return true;
        }
    }
?>