<?php 
    use app\models\User;

    class AdminUserController
    {
        private $userModel;

        public function __construct()
        {
            $this->userModel = new User();
        }

        public function index()
        {
            // Pass $users to the view
            require __DIR__ . '/../views/admin/adminUserList.view.php';
        }

        public function renderUserRows()
        {

            $users = $this->userModel->getAllUsers();

            if(empty($users))
            {
                return "<tr><td colspan='7'>No users found.</td></tr>";
            }

            $rows = '';
            foreach($users as $index => $user)
            {
                $rows .= 
                "<tr>
                    <td>" . ($index + 1) . "</td>
                    <td class='firstName'>" . htmlspecialchars($user['first_name']) . "</td>
                    <td class='lastName'>" . htmlspecialchars($user['last_name']) . "</td>
                    <td class='email'>" . htmlspecialchars($user['email']) . "</td>
                    <td>" . htmlspecialchars($user['created_at'] ?? '') . "</td>
                    <td>" . htmlspecialchars($user['updated_at'] ?? '') . "</td>
                    <td>
                        <a href='#' class='userListUpdateBtn' data-bs-toggle='modal' data-bs-target='#updateUserModal' data-user-id='". htmlspecialchars($user["user_id"]) ."' data-user-firstname='". htmlspecialchars($user["first_name"]) ."' data-user-lastname='". htmlspecialchars($user["last_name"]) ."' data-user-email='". htmlspecialchars($user["email"]) ."'><i class='fa-solid fa-pencil'></i> Edit</a>
                        <a href='deleteUser?id=". htmlspecialchars($user["user_id"]) ."' class='userListDeleteBtn'><i class='fa-solid fa-trash'></i> Delete</a>
                    </td>
                </tr>";
            }
            return $rows;
        }

        public function loginUnable()
        {
            header('location: ' . BASE_URL . 'login');
            exit();
        }

        public function deleteUser()
        {
            if($_SERVER['REQUEST_METHOD'] === 'GET')
            {
                $id = trim($_GET['id']);
                $deletingUser = $this->userModel->deleteUser($id);
                
                if($deletingUser)
                {
                    // Set a session variable to indicate success
                    $_SESSION['delete_user_feedback'] = 'successfully';
                    header('Location: ' . BASE_URL . 'adminUsers');
                    exit();
                }
                else
                {
                    header('Location: ' . BASE_URL . 'adminUsers');
                    exit();
                }
            }  
        }

        public function updateUser()
        {
            if($_SERVER['REQUEST_METHOD'] === 'POST')
            {
                
                $id = trim($_POST['user_id']);
                $firstName = trim($_POST['first_name']);
                $lastName = trim($_POST['last_name']);
                $email = trim($_POST['email']);

                $data = [
                    'first_name' => $firstName,
                    'last_name' => $lastName,
                    'email' => $email
                ];

                $updatingUser = $this->userModel->updateUser($id, $data);

                if($updatingUser)
                {
                    // Set a session variable to indicate success
                    $_SESSION['update_user_feedback'] = 'successfully';
                    header('Location: ' . BASE_URL . 'adminUsers');
                    exit();
                }
                else
                {
                    header('Location: ' . BASE_URL . 'adminUsers');
                    exit();
                }
            }
        }

        public function addUserForm()
        {
            require __DIR__ . '/../views/admin/adminUserAdd.view.php';   
        }

        public function addUser()
        {
            if($_SERVER['REQUEST_METHOD'] === 'POST')
            {   
                $firstName = trim($_POST['first_name']);
                $lastName = trim($_POST['last_name']);
                $email = trim($_POST['email']);
                $password = trim($_POST['password']);

                $inputChecker = $this->checkAddUserInputs($firstName, $lastName, $email, $password);

                if($inputChecker === false)
                {
                    return $this->addUserForm();
                } 

                $data = [
                    'first_name' => $firstName,
                    'last_name' => $lastName,
                    'email' => $email,
                    'password' => password_hash($password, PASSWORD_DEFAULT) // Hashing the password before storing
                ];

                // Assuming a User model exists with an addUser method
                $result = $this->userModel->addUser($data);

                if($result)
                {
                    $_SESSION['add_user_form_message'] = "successfully";
                    header('location: ' . BASE_URL . 'addUsers');
                    exit();
                }
                else
                {   
                    header('location: ' . BASE_URL . 'addUsers');
                    exit();
                }
            }
        }

        public function checkAddUserInputs($firstName, $lastName, $email, $password)
        {
            $errors = [];

            if(empty($firstName))
            {
                $errors['first_name'] = "First name must be filled";
            }

            if(empty($lastName))
            {
                $errors['last_name'] = "Last name must be filled";
            }

            if(empty($email))
            {
                $errors['email'] = "Email must be filled";
            } 
            elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
                $errors['email'] = "Email format is invalid";
            }
            elseif($this->userModel->checkEmailAvailability($email) === false)
            {
                $errors['email'] = "Email is already used";
            }

            if(empty($password))
            {
                $errors['password'] = "Password must be filled";
            } 
            elseif(strlen($password) < 8)
            {
                $errors['password'] = "Password must be at least 8 characters";
            }

            //If their is an error it store to the Session variable
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