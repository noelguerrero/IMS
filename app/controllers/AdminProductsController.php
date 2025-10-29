<?php

    class adminProductsController
    {
        public function index()
        {
            require __DIR__ . '/../views/admin/adminProductList.view.php';
        }

        public function loginUnable()
        {
            header('location: ' . BASE_URL . 'login');
            exit();
        }

        public function addProductForm()
        {
            // $oldInputs = $_SESSION['old_inputs'] ?? [];
            // $errors = $_SESSION['form_errors'] ?? [];
            // unset($_SESSION['old_inputs'], $_SESSION['form_errors']);

            require __DIR__ . '/../views/admin/adminProductAdd.view.php';
        }
    }
?>