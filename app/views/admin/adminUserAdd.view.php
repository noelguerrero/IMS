<?php include __DIR__ . '/../components/adminHeader.php';?>

<div id="dashboardMainContainer">
    <!-- SIDEBAR -->
    <?php include __DIR__ . '/../components/adminSidebar.php';?>
    <!-- SIDEBAR END -->

    <!-- CONTENT -->
    <div class="dashboard_content_container" id="dashboard_content_container">
        <!-- Topnav -->
        <?php include __DIR__ . '/../components/adminTopNav.php';?>
        <!-- Topnav END -->
        <div class="dashboard_content">
            <div class="dashboard_content_main">
                <div class="row">
                    <div class="column column-12">
                        <h1 class="addUserSectionHeader"><i class="fa-solid fa-user-plus"></i>Create User</h1>
                        <div id="userAddFormContainer">
                            <form action="" method="POST" class="appForm">
                                <div class="appFormInputContainer">
                                    <label class="formInputLabel" for="">First Name</label>
                                    <input type="text" class="appFormInputs" id="first_name" name="first_name" value="<?= htmlspecialchars($oldInputs['first_name'] ?? '')?>"/>
                                    <span class="errors"><?= $errors['first_name'] ?? '' ?></span>
                                </div>
                                <div class="appFormInputContainer floatRight">
                                    <label class="formInputLabel" for="">Last Name</label>
                                    <input type="text" class="appFormInputs" id="last_name" name="last_name" value="<?= htmlspecialchars($oldInputs['last_name'] ?? '')?>"/>
                                    <span class="errors"><?= $errors['last_name'] ?? '' ?></span>
                                </div>
                                <div class="appFormInputContainer">
                                    <label class="formInputLabel" for="">Email</label>
                                    <input type="email" class="appFormInputs" id="email" name="email" value="<?= htmlspecialchars($oldInputs['email'] ?? '')?>"/>
                                    <span class="errors"><?= $errors['email'] ?? '' ?></span>
                                </div>
                                <div class="appFormInputContainer floatRight">
                                    <label class="formInputLabel" for="">Password</label>
                                    <input type="password" class="appFormInputs" id="password" name="password" value="<?= htmlspecialchars($oldInputs['password'] ?? '')?>"/>
                                    <span class="errors"><?= $errors['password'] ?? '' ?></span>
                                </div>
                                <input type="hidden" name="table" value="users"/> 
                                <div class="addUserButtonContainer">
                                    <button class="appFormBtn" type="submit"><i class="fa-solid fa-plus"></i> Add User</button> 
                                </div>               
                            </form>
                        </div>
                    </div>
                </div>        
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../components/adminBottom.php';?>