<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IMS - Admin Dashboard</title>

    <!-- CSS LINKS -->
     <link rel="stylesheet" href="<?= BASE_URL;?>../app/resources/css/customizeClass.css">
    <link rel="stylesheet" href="<?= BASE_URL;?>../app/resources/css/admin/adminDashboard.css">
    <link rel="stylesheet" href="<?= BASE_URL;?>../app/resources/css/components/adminSideBar.css">
    <link rel="stylesheet" href="<?= BASE_URL;?>../app/resources/css/components/adminTopNav.css">
    <link rel="stylesheet" href="<?= BASE_URL;?>../app/resources/css/admin/adminProductAdd.css">
    <link rel="stylesheet" href="<?= BASE_URL;?>../app/resources/css/admin/adminUserAdd.css">
    <link rel="stylesheet" href="<?= BASE_URL;?>../app/resources/css/admin/adminUserList.css">
    <link rel="stylesheet" href="<?= BASE_URL;?>../app/resources/css/admin/adminSupplierAdd.css">
    <link rel="stylesheet" href="<?= BASE_URL;?>../app/resources/css/admin/adminSupplierList.css">

    <!-- FONTAWESOME LINK -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

    <!-- Bootstrap 5.3.7 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css" />

    <!-- Select2 CSS-->
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <?php require __DIR__ . '/../../core/formErrorMessage.php';?>
