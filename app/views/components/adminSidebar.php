<div class="dashboard_sidebar" id="dashboard_sidebar">
    <h3 class="dashboard_logo" id="dashboard_logo">IMS</h3>
    <div class="dashboard_sidebar_user" id="dashboard_sidebar_user">
        <img src="../app/resources/images/user/liz.jpg" alt="User image." id="userImage"/>
        <span id="userName"><?= $_SESSION['user']['name'];?></span>
    </div>
    <div class="dashboard_sidebar_menus">
        <ul class="dashboard_menu_lists">
            <li class="liMainMenu">
                <a href=""><i class="fa-solid fa-gauge-simple-high" id="dashboardMenuLogo"></i> <span class="menuText">DASHBOARD</span></a>
            </li>
            <li class="liMainMenu showHideSubMenu">
                <a href="javascript:void(0);" class="showHideSubMenu">
                    <i class="fa-solid fa-tag showHideSubMenu"></i> 
                    <span class="menuText showHideSubMenu">PRODUCT</span>
                    <i class="fa-solid fa-angle-down mainMenuIconArrow showHideSubMenu"></i>
                </a>
                <!-- Submenu -->
                <ul class="subMenu">
                    <li class="liSubMenu"><a href="<?= BASE_URL;?>adminProducts" class="subMenuLink"><i class="fa-regular fa-circle"></i>  <span class="subMenuText">View Products</span></a></li>
                    <li class="liSubMenu"><a href="<?= BASE_URL;?>addProducts" class="subMenuLink"><i class="fa-regular fa-circle"></i>  <span class="subMenuText">Add Products</span></a></li>
                </ul>
            </li>
            <li class="liMainMenu showHideSubMenu">
                <a href="javascript:void(0);" class="showHideSubMenu">
                    <i class="fa-solid fa-truck-fast showHideSubMenu"></i> 
                    <span class="menuText showHideSubMenu">SUPPLY</span>
                    <i class="fa-solid fa-angle-down mainMenuIconArrow showHideSubMenu"></i>
                </a>
                <!-- Submenu -->
                <ul class="subMenu">
                    <li class="liSubMenu"><a href="<?=BASE_URL;?>adminSuppliers" class="subMenuLink"><i class="fa-regular fa-circle"></i>  <span class="subMenuText">View Suppliers</span></a></li>
                    <li class="liSubMenu"><a href="<?=BASE_URL;?>addSuppliers" class="subMenuLink"><i class="fa-regular fa-circle"></i>  <span class="subMenuText">Add Suppliers</span></a></li>
                </ul>
            </li>
            <li class="liMainMenu showHideSubMenu">
                <a href="javascript:void(0);" class="showHideSubMenu">
                    <i class="fa-solid fa-user-plus showHideSubMenu"></i> 
                    <span class="menuText showHideSubMenu">USER</span>
                    <i class="fa-solid fa-angle-down mainMenuIconArrow showHideSubMenu"></i>
                </a>
                <!-- Submenu -->
                <ul class="subMenu">
                    <li class="liSubMenu"><a href="<?=BASE_URL;?>adminUsers" class="subMenuLink"><i class="fa-regular fa-circle"></i>  <span class="subMenuText">View Users</span></a></li>
                    <li class="liSubMenu"><a href="<?=BASE_URL;?>addUsers" class="subMenuLink"><i class="fa-regular fa-circle"></i>  <span class="subMenuText">Add Users</span></a></li>
                </ul>
            </li>
        </ul>
    </div>  
</div>