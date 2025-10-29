<?php
    use app\models\User;
    // use app\core\config;
    class AuthController
    {
        private $userModel;
        
        public function __construct()
        {
            $this->userModel = new User();
        }

        public function loginForm()
        {
            if(isset($_SESSION['user']) && !empty($_SESSION['user']))
            {
                header('location: ' . BASE_URL . 'adminDashboard');
                exit();
            }
            else
            {
                require __DIR__ . '/../views/auth/login.view.php';
            }
            
        }

        public function login()
        {
            $_SESSION['user'] = [];

            if ($_SERVER['REQUEST_METHOD'] === 'POST') 
            {
                $username = trim($_POST['username']);
                $password = trim($_POST['password']);

                $user = $this->userModel->findByUsername($username);

                if($user && password_verify($password, $user['password']) && !empty($username) && !empty($password))
                {
                    $_SESSION['user']['name'] = $user['first_name'] . ' ' . $user['last_name'];
                    $_SESSION['user']['id'] = $user['user_id'];
                    $_SESSION['login_success_message'] = 'sucessfully';
                    header('location: ' . BASE_URL . 'adminDashboard');
                    exit();
                }
                else
                {
                    $_SESSION['login-error-message'] = 'Please make sure that username and password are incorrect.';
                    header('location: ' . BASE_URL . 'login');
                    exit();
                }
            }
        }

        public function logout()
        {
            session_unset();
            session_destroy();
            header('location: ' . BASE_URL . 'login');
            exit();
        }
    }
?>