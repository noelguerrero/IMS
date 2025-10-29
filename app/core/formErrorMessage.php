<?php
    $errors = $_SESSION['form_errors'] ?? [];
    $oldInputs = $_SESSION['old_inputs'] ?? [];
    unset($_SESSION['form_errors'], $_SESSION['old_inputs']);

?>
