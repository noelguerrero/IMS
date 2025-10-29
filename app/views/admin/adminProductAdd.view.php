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
                        <h1 class="addProductHeader"><i class="fa-solid fa-user-plus"></i>Create Product</h1>
                        <div id="productAddFormContainer">
                            <form action="" method="POST" class="productAddForm" enctype="multipart/form-data">
                                <div class="productAddInputContainer">
                                    <label class="productInputLabel" for="">Product Name</label>
                                    <input type="text" class="productInputs" id="product_name" name="product_name" value=""/>
                                    <span class="errors"></span>
                                </div>

                                <div class="productAddInputContainer floatRight">
                                    <label class="productInputLabel" for="">Supplier</label>
                                    <select name="product_supplier[]" id="product_supplier" class="productSupplierList" multiple="">
                                        <!-- The supplier list option here -->
                                    </select>
                                </div>

                                <div class="productAddInputContainer">
                                    <label class="productInputLabel" for="">Description</label>
                                    <textarea class="productInputDescription" name="product_description" id="product_description"></textarea>
                                    <span class="errors"></span>
                                </div>
                                         
                                <div class="productAddInputContainer floatRight">
                                    <label class="productInputLabel" for="">Product Image</label>
                                    <input type="file" class="productInputImage" name="product_image" id="product_image" value=""/>
                                </div>
                                
                                <div class="productButtonContainer floatRight">
                                    <button class="productAddBtn" type="submit"><i class="fa-solid fa-plus"></i> Add Product</button>
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