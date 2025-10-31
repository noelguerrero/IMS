<!-- LOGIN FEEDBACK -->
<?php if(isset($_SESSION['login_success_message'])): ?>
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Login Successful!',
            text: 'You have logged in successfully.'
        });
    </script>
    <?php unset($_SESSION['login_success_message']); ?>
<?php endif; ?>
<!-- LOGIN FEEDBACK -->

<!-- USER LIST FEEDBACKS -->

<!-- Update User Feedback -->
<?php if(isset($_SESSION['update_user_feedback'])): ?>
    <script>
        Swal.fire({
            icon: '<?php echo $_SESSION['update_user_feedback'] === "successfully" ? "success" : "error"; ?>',
            title: '<?php echo $_SESSION['update_user_feedback'] === "successfully" ? "User updated!" : "Update failed!"; ?>',
            text: '<?php echo $_SESSION['update_user_feedback'] === "successfully" ? "The user information has been updated successfully." : "There was an error updating the user information. Please try again."; ?>'
        });
    </script>
    <?php unset($_SESSION['update_user_feedback']); ?>
<?php endif; ?>
<!-- Update User Feedback End-->

<!-- Delete User Feedback -->
<?php if(isset($_SESSION['delete_user_feedback'])): ?>
    <script>
        Swal.fire({
            icon: '<?php echo $_SESSION['delete_user_feedback'] === "successfully" ? "success" : "error"; ?>',
            title: '<?php echo $_SESSION['delete_user_feedback'] === "successfully" ? "Deleted Successfully!" : "Delete Failed!"; ?>',
            text: '<?php echo $_SESSION['delete_user_feedback'] === "successfully" ? "The user has been deleted successfully." : "There was an error on deleting the user. Please try again."; ?>'
        });
    </script>
    <?php unset($_SESSION['delete_user_feedback']); ?>
<?php endif; ?>
<!-- Delete User Feedback End -->

<!-- USER LIST FEEDBACKS END -->


<!-- ADD USER FORM FEEDBACKS -->
<?php if(isset($_SESSION['add_user_form_message'])):?>
    <script>
        Swal.fire({
            icon: '<?php echo $_SESSION['add_user_form_message'] === "successfully" ? "success" : "error"; ?>',
            title: '<?php echo $_SESSION['add_user_form_message'] === "successfully" ? "User added!" : "Update failed!"; ?>',
            text: '<?php echo $_SESSION['add_user_form_message'] === "successfully" ? "The user has been added successfully." : "There was an error adding the user information. Please try again."; ?>'
        });
    </script>
    <?php unset($_SESSION['add_user_form_message']); ?>
<?php endif; ?>
<!-- ADD USER FORM FEEDBACKS END -->


<!-- ADD SUPPLIER FEEDBACK -->
<?php if(isset($_SESSION['add_supplier_form_message'])): ?>
    <script>
        Swal.fire({
            icon: '<?php echo $_SESSION['add_supplier_form_message'] === "successfully" ? "success" : "error"; ?>',
            title: '<?php echo $_SESSION['add_supplier_form_message'] === "successfully" ? "Supplier added!" : "Add Supplier failed!"; ?>',
            text: '<?php echo $_SESSION['add_supplier_form_message'] === "successfully" ? "The supplier has been added successfully." : "There was an error adding the supplier information. Please try again."; ?>'
        });
    </script>
    <?php unset($_SESSION['add_supplier_form_message']); ?>
<?php endif; ?>
<!-- ADD SUPPLIER FEEDBACK END -->


<!-- DELETE SUPPLIER FEEDBACK -->
<?php if(isset($_SESSION['delete_supplier_feedback'])):?>
    <script>
        Swal.fire({
            icon: '<?php echo $_SESSION['delete_supplier_feedback'] === "successfully" ? "success" : "error"; ?>',
            title: '<?php echo $_SESSION['delete_supplier_feedback'] === "successfully" ? "Deleted Successfully!" : "Delete Failed!"; ?>',
            text: '<?php echo $_SESSION['delete_supplier_feedback'] === "successfully" ? "The supplier has been deleted successfully" : "There was an error on deleting user. Please try again."; ?>'
        });
    </script>
    <?php unset($_SESSION['delete_supplier_feedback']); ?>
<?php endif;?>    
<!-- DELETE SUPPLIER FEEDBACK END-->