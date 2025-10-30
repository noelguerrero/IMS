<?php
    use app\models\Supplier;
    use app\models\User;

    class AdminSupplierController
    {
        private $supplierModel;
        private $userModel;

        public function __construct()
        {
            $this->supplierModel = new Supplier();
            $this->userModel = new User();
        }

        public function index()
        {
            require __DIR__ . '/../views/admin/adminSupplierList.view.php';
        }

        public function renderSupplierRows()
        {
            $suppliers = $this->supplierModel->getAllSuppliers();

            if(empty($suppliers))
            {
                return "<tr><td class='noSupplier' colspan='8'>No suppliers found.</td></tr>";
            }

            $rows = '';
            foreach($suppliers as $index => $supplier)
            {
                $rows .=
                "<tr>
                    <td>" . ($index + 1) . "</td>
                    <td>" . htmlspecialchars($supplier['supplier_name']) . "</td>
                    <td>" . htmlspecialchars($supplier['supplier_location']) ."</td>
                    <td>" . htmlspecialchars($supplier['supplier_email']) . "</td>
                ";
                $creatorId = $supplier['created_by'];
                $createdBy = $this->userModel->getUserEmailById($creatorId);
                    
                $rows .=
                "
                    <td>" . $createdBy . "</td>
                    <td>" . htmlspecialchars($supplier['created_at'] ?? '') . "</td>
                    <td>" . htmlspecialchars($supplier['updated_at'] ?? '') . "</td>
                    <td>
                        <a href='#' class='supplierListUpdateBtn'><i class='fa-solid fa-pencil'></i> Edit</a>
                        <a href='#' class='supplierListDeleteBtn'><i class='fa-solid fa-trash'></i> Delete</a>
                    </td>
                </tr>
                ";
            }
            echo $rows;
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