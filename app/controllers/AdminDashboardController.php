<?php
    class AdminDashboardController
    {
        public function dashboard()
        {
            require __DIR__ . '/../views/admin/adminDashboard.view.php';
        }

        public function loginUnable()
        {
            header('location: ' . BASE_URL . 'login');
            exit();
        }
    }
?>
