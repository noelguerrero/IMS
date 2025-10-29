<?php include __DIR__ . '/../components/header.php';?>

<!-- MAIN BODY -->
<div id="loginBackground">
    <div class="loginContainer">
        <div class="loginHeader">
            <h1>IMS</h1>
            <p class="ims">Inventory Management System</p>
        </div>
        <?php if(isset($_SESSION['login-error-message'])) : ?>
            <div id="error_message">
                <strong>Error:</strong>
                <p><?=htmlspecialchars($_SESSION['login-error-message']);?></p>
            </div>
            <?php unset($_SESSION['login-error-message']);?>
        <?php endif;?>

        <div class="loginBody">
            <form action="" method="POST">
                <div class="loginInputContainer">
                    <label for="">Username:</label>
                    <input type="text" name="username" placeholder="username"/>
                </div>
                <div class="loginInputContainer">
                    <label for="">Password:</label>
                    <input type="password" name="password" placeholder="password"/>
                </div>
                <div class="loginButtonContainer">
                    <button>Login</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- MAIN BODY END -->
<?php include __DIR__ . '/../components/bottom.php';?>