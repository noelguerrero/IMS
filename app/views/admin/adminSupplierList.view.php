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
                        <h1 class="sectionHeader"><i class="fa-solid fa-list"></i>&nbsp;List Of Suppliers</h1>
                        <div class="supplierContainer">
                            <div class="supplierTableContainer" style="overflow-x: auto;">
                                <table id="suppliersTable" class="supplierTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Supplier Name</th>
                                            <th>Location</th>
                                            <th>Email</th>
                                            <th>Created By</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th class="actionColumn">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?= AdminSupplierController::renderSupplierRows();?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../components/adminBottom.php';?>