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
                        <h1 class="productTableSectionHeader"><i class="fa-solid fa-list"></i>&nbsp;List Of Products</h1>
                        <div class="productContainer">
                            <div class="productTableContainer">
                                <table class="productsTable" id="productTable">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Product Name</th>
                                            <th>Product Description</th>
                                            <th>Product Image</th>
                                            <th class="productSupplierColumn">Suppliers</th>
                                            <th>Created By</th>
                                            <th>Created At</th>
                                            <th>Updated At</th>
                                            <th class="actionColumn">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>Milo</td>
                                            <td>Energy Drink</td>
                                            <td>
                                                <div class="productImageHolder">
                                                    <img class="productImage" src="<?=BASE_URL;?>../app/resources/images/product_images/Milo_no_1293.jpg" alt="">
                                                </div>
                                            </td>
                                            <td>Milo Corp</td>
                                            <td>Noel Guerrero</td>
                                            <td>10/29/2025</td>
                                            <td>10/29/2025</td>
                                            <td>
                                                <a href='#' class='productListUpdateBtn'><i class='fa-solid fa-pencil'></i> Edit</a>
                                                <a href='#' class='productListDeleteBtn'><i class='fa-solid fa-trash'></i> Delete</a>
                                            </td>
                                        </tr>
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