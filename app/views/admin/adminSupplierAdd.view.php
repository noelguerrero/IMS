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
                        <h1 class="addSupplierHeader"><i class="fa-solid fa-user-plus"></i>Create Suppliers</h1>
                        <div id="supplierAddFormContainer">
                            <form action="" method="POST" class="supplierAddForm">
                                <div class="supplierAddInputContainer">
                                    <label class="supplierInputLabel" for="">Supplier Name</label>
                                    <input type="text" class="supplierInputs" id="supplier_name" name="supplier_name" value="<?=htmlspecialchars($oldInputs['supplier_name'] ?? '');?>"/>
                                    <span class="errors"><?=$errors['supplier_name'] ?? '';?></span>
                                </div>
                                <div class="supplierAddInputContainer">
                                    <label class="supplierInputLabel" for="">Supplier Location</label>
                                    <textarea class="supplierInputLocation" name="supplier_location" id="supplier_location"><?=htmlspecialchars($oldInputs['supplier_location'] ?? '');?></textarea>
                                    <span class="errors"><?=$errors['supplier_location'] ?? '';?></span>
                                </div>
                                <div class="supplierAddInputContainer">
                                    <label class="supplierInputLabel" for="">Supplier Email</label>
                                    <input type="email" class="supplierInputs" name="supplier_email" id="supplier_email" value="<?=htmlspecialchars($oldInputs['supplier_email'] ?? '');?>"/>
                                    <span class="errors"><?=$errors['supplier_email'] ?? '';?></span>
                                </div>
                                <button class="supplierAddBtn" type="submit"><i class="fa-solid fa-plus"></i> Add Supplier</button>                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include __DIR__ . '/../components/adminBottom.php';?>