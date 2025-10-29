## THIS SOURCE CODE IS THE COPY OF THE WHOLE CODE OF ADMIN DASHBOARD WITH SIDEBAR, I CREATE THIS BECAUSE I CAN'T FIX THE RESPONSIVE STYLE FOR NOW, AND I FIX IT LATER.

## NOTED: I CREATE THIS SO, I SHOULD NOT COMBINE THE CODE AGAIN


## HTML CODE
<?php include('../components/adminHeader.php');?>

<div id="dashboardMainContainer">
    <!-- SIDEBAR -->
    <div class="dashboard_sidebar" id="dashboard_sidebar">
        <h3 class="dashboard_logo" id="dashboard_logo">IMS</h3>
        <div class="dashboard_sidebar_user" id="dashboard_sidebar_user">
            <img src="../../resources/images/user/liz.jpg" alt="User image." id="userImage"/>
            <span id="userName">Noel</span>
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
                        <li class="liSubMenu"><a href="" class="subMenuLink"><i class="fa-regular fa-circle"></i>  <span class="subMenuText">View Products</span></a></li>
                        <li class="liSubMenu"><a href="" class="subMenuLink"><i class="fa-regular fa-circle"></i>  <span class="subMenuText">Add Products</span></a></li>
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
                        <li class="liSubMenu"><a href="" class="subMenuLink"><i class="fa-regular fa-circle"></i>  <span class="subMenuText">View Suppliers</span></a></li>
                        <li class="liSubMenu"><a href="" class="subMenuLink"><i class="fa-regular fa-circle"></i>  <span class="subMenuText">Add Suppliers</span></a></li>
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
                        <li class="liSubMenu"><a href="" class="subMenuLink"><i class="fa-regular fa-circle"></i>  <span class="subMenuText">View Users</span></a></li>
                        <li class="liSubMenu"><a href="" class="subMenuLink"><i class="fa-regular fa-circle"></i>  <span class="subMenuText">Add Users</span></a></li>
                    </ul>
                </li>
            </ul>
        </div>  
    </div>
    <!-- SIDEBAR END -->

    <!-- CONTENT -->
    <div class="dashboard_content_container" id="dashboard_content_container">
        <!-- Topnav -->
        <div class="dashboard_topNav">
            <a href="" id="toggleSideBarBtn"><i class="fa-solid fa-bars"></i></a>
            <a href="" id="logoutBtn"><i class="fa-solid fa-arrow-right-from-bracket"></i> Log out</a>
        </div>
        <!-- Topnav END -->
        <div class="dashboard_content">
            <div class="dashboard_content_main">
                
            </div>
        </div>
    </div>
</div>

<?php include('../components/adminFooter.php');?>

## HTML CODE END





## CSS CODE
/* SIDEBAR */

.dashboard_sidebar{
  width: 20%;
  background: #323232;
  height: 100vh;
  transition: width 0.8s ease;
}

.dashboard_sidebar.collapsed {
  width: 80px;
}


.dashboard_content_container{
  width: 80%;
  background: #f4f6f9;
  transition: width 0.8s ease;
}

.dashboard_logo{
  color: #f685a1;
  font-size: 80px;
  text-align: center;
  transition: font-size 0.8s ease;
} 

.dashboard_sidebar_user{
  padding-left: 15px;
  /* text-align: center; */
  position: relative;
  padding-bottom: 20px;
  border-bottom: 1px solid #fff;
  transition: padding-left 0.8s ease, text-align 0.8s ease;
  margin-bottom: 15px;
}

.dashboard_sidebar_user img{
  width: 70px;
  display: inline-block;
  border-radius: 50%;
  border: 2px solid #f685a1;
  margin-right: 5px;
  vertical-align: middle;
  transition: width 0.8s ease;
}

.dashboard_sidebar_user span{
  font-size: 18px;
  margin-left: 3px;
  margin-right: 3px;
  text-transform: uppercase;
  display: inline-block;
  color: #fff;
  top: 20%;
  transition: margin 0.8s ease;
}

ul.dashboard_menu_lists{
  margin-top: 20px;
  list-style: none;
}

.liMainMenu{
  padding: 0px 0px;
  
  text-transform: uppercase;
}

.liMainMenu a{
  text-decoration: none;
  color: #fff;
  display: block;
  font-size: 20px;
  padding-left: 15px;
  padding-right: 15px;
  padding-top: 15px !important;
  padding-bottom: 15px !important;
}

.liMainMenu a i{
  font-size: 25px;
  margin-right: 10px;
}

.fa-solid.fa-gauge-simple-high{
  margin-right: 7px;
  font-size: 23px;
  
}

.fa-solid.fa-boxes-stacked{
  width: 20px;
  font-size: 20px;
}

.fa-solid.fa-truck-fast{
  width: 20px;
  font-size: 20px;
}

.fa-solid.fa-user-plus{
  margin-right: 5px;
  font-size: 20px;
}

.menuActive{
  background: #f685a1;
  color: #fff;
}

.dashboard_menu_lists li:hover{
  background: #f685a1;
  color: #fff;
  transition: 0,3s all;
}

.menuText{
  font-size: 15px;
  opacity: 1;
  visibility: visible;
  transition: opacity 0.5s ease;
}

.menuText.hide {
  opacity: 0;
  visibility: hidden;
}

.textCapitalize{
  text-transform: capitalize;
}


.revenueMenu{
  font-size: 17px;

}

.accountsReceivableMenu{
  font-size: 17px;

}

i.mainMenuIconArrow{
  float: right;
  font-size: 20px;
  margin-top: 5px;
}

a.subMenuLink{
  padding-left: 25px !important;
  padding-top: 5px !important;
  padding-bottom: 5px !important;
  text-transform: none;
}

.liSubMenu .subMenuLink i{
  font-size: 15px !important;
  width: 10px;
}

.subMenuText{
  text-transform: none;
  font-size: 13px;
}

.subMenu{
  width: 100%;
  background: #b05a70;
  display: none;
}

.mainMenuIconArrow{
  transition: transform 0.3s ease;
}

.subMenuActive{
  font-weight: bold;
  border-top: 2px solid white;
  border-bottom: 2px solid white;
  background: #763a49;
}

/* Responsive */
@media (max-width: 992px) {
  .dashboard_sidebar {
    width: 200px;
    position: fixed;
    top: 0;
    left: -200px;
    height: 100%;
    z-index: 200;
  }
  .dashboard_sidebar.active {
    left: 0;
  }
  .dashboard_logo { font-size: 50px; }
  .dashboard_sidebar_user img { width: 50px; }
  .dashboard_sidebar_user span { font-size: 14px; }
}


@media (max-width: 480px) {
  .dashboard_sidebar {
    width: 160px;
    left: -160px;
  }
  .dashboard_sidebar_user img { width: 40px; }
  .dashboard_sidebar_user span { font-size: 12px; }
  .liMainMenu a { font-size: 14px; }
  .menuText { display: none; } /* Only icons */
}

/* Hide sidebar on mobile */
@media (max-width: 768px) {
  #dashboard_sidebar {
    position: fixed;
    top: 0;
    left: -250px; /* hidden */
    width: 250px;
    height: 100%;
    background: #2d2d2d;
    z-index: 1000;
    transition: left 0.3s ease;
  }

  /* When sidebar is open */
  #dashboard_sidebar.open {
    left: 0;
  }

  /* Content takes full width when sidebar hidden */
  #dashboard_content_container {
    width: 100% !important;
  }

  /* Sidebar toggle button */
  #toggleSideBarBtn {
    position: fixed;
    top: 15px;
    left: 15px;
    z-index: 1101;
    cursor: pointer;
  }
}
/* Responsive end */

/* SIDEBAR END */



/* CONTENT */
#dashboardMainContainer{
  display: flex;
  flex-direction: row;
  font-family: Arial;
}

.dashboard_content{
  padding: 50px 10px 10px 10px;
}

.dashboard_content_main{
  background: #fff;  
  height: 80vh;
  padding: 20px;
  border: 1px solid #cdcdcd;
  /*min-height: 800px;
  height: 100%; */
}

/* Responsive */
@media (max-width: 992px) {
  .dashboard_content_container {
    width: 100%;
    margin-left: 0;
  }
}

@media (max-width: 768px) {
  #dashboardMainContainer {
    flex-direction: column;
  }
  .dashboard_content_container {
    width: 100%;
  }
}

@media (max-width: 480px) {
  .dashboard_content_main {
    padding: 15px;
    font-size: 14px;
  }
}
/* Responsive end */

/* CONTENT END */




/* TOPNAV */

.dashboard_topNav {
  background: #fff;
  padding: 15px 20px;
  display: flex;
  justify-content: space-between; /* places buttons left & right */
  align-items: center;            /* vertically centered */
}

.dashboard_topNav a {
  color: #848383;
  font-size: 18px;
  text-decoration: none;
}

#logoutBtn {
  margin-left: auto; /* push logout button to the right */
}

#logoutBtn:hover {
  color: red;
  transition: 0.3s all;
}

/* --- TOPNAV RESPONSIVE --- */
@media (max-width: 768px) {
  .dashboard_topNav {
    padding: 10px 15px;
  }
  .dashboard_topNav a {
    font-size: 16px;
  }
}

@media (max-width: 480px) {
  .dashboard_topNav a {
    font-size: 14px;
  }
}

/* TOPNAV END */
## CSS CODE END





## JS CODE
// SIDEBAR TOGGLE
let sideBarIsOpen = true;

toggleSideBarBtn.addEventListener('click', (event) => {
    event.preventDefault();

    // Check screen width
    if (window.innerWidth <= 768) {
        // ----- MOBILE BEHAVIOR -----
        if (sideBarIsOpen) {
            // Hide sidebar
            dashboard_sidebar.style.width = '0';
            dashboard_content_container.style.width = '100%';
            sideBarIsOpen = false;
            toggleSideBarBtn.classList.remove("open"); // hamburger ↔ X
        } else {
            // Show sidebar (overlay style)
            dashboard_sidebar.style.width = '200px'; // fixed width
            dashboard_sidebar.style.position = 'absolute';
            dashboard_sidebar.style.zIndex = '1000';
            dashboard_content_container.style.width = '100%';
            sideBarIsOpen = true;
            toggleSideBarBtn.classList.add("open");
        }
    } else {
        // ----- DESKTOP BEHAVIOR -----
        if (sideBarIsOpen) {
            dashboard_sidebar.style.width = '10%';
            dashboard_content_container.style.width = '90%';
            dashboard_logo.style.fontSize = '60px';
            userImage.style.width = '60px';
            dashboard_sidebar_user.style.paddingLeft = '0px';
            dashboard_sidebar_user.style.textAlign = 'center';
            userName.style.marginTop = '15px';
            dashboardMenuLogo.style.marginRight = '48px';

            let menuText = document.getElementsByClassName('menuText');
            for (let i = 0; i < menuText.length; i++) {
                menuText[i].classList.add('hide');
                menuText[i].style.display = 'none';
            }

            document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';
            sideBarIsOpen = false;
            toggleSideBarBtn.classList.remove("open");
        } else {
            dashboard_sidebar.style.width = '20%';
            dashboard_sidebar.style.transition = 'all 0.8s ease';
            dashboard_content_container.style.width = '80%';
            dashboard_logo.style.fontSize = '80px';
            userImage.style.width = '70px';
            dashboard_sidebar_user.style.paddingLeft = '15px';
            dashboard_sidebar_user.style.textAlign = 'left';
            userName.style.marginTop = '0px';
            dashboardMenuLogo.style.marginRight = '7px';

            let menuText = document.getElementsByClassName('menuText');
            for (let i = 0; i < menuText.length; i++) {
                menuText[i].classList.remove('hide');
                menuText[i].style.display = 'inline-block';
            }

            document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'left';
            sideBarIsOpen = true;
            toggleSideBarBtn.classList.add("open");
        }
    }
});

// MOBILE SIDEBAR TOGGLE
toggleSideBarBtn.addEventListener('click', function() {
    dashboard_sidebar.classList.toggle('open');
});
//SIDE BAR TOGGLE END


//MULTILEVEL DROP DOWN MENU (Submenu Show / Hide function)
document.addEventListener('click', function(e){
    let clickedEl = e.target;

    if(clickedEl.classList.contains('showHideSubMenu')){

       let subMenu = clickedEl.closest('li').querySelector('.subMenu');
       let mainMenuArrow = clickedEl.closest('li').querySelector('.mainMenuIconArrow');

       //Close and Open SubMenus
       let subMenuS = document.querySelectorAll('.subMenu');
       subMenuS.forEach((sub) => {
            let arrow = sub.closest('li').querySelector('.mainMenuIconArrow');
            if(subMenu != sub){
                sub.style.display = 'none';
                arrow.style.transform = 'rotate(0deg)';
            }
       });
 
       //function to show / hide submenu
       showHideSubMenu(subMenu, mainMenuArrow);
    }   
});

function showHideSubMenu(subMenu, mainMenuArrow){
    if(subMenu != null){

        if(subMenu.style.display === 'none' || subMenu.style.display === ''){
            subMenu.style.display = 'block';
            mainMenuArrow.style.transform = 'rotate(180deg)';
        } else {
            subMenu.style.display = 'none';
            mainMenuArrow.style.transform = 'rotate(0deg)';
        }
        
    }
}
//MULTILEVEL DROP DOWN MENU END 


//ADD / HIDE ACTIVE CLASS TO MENU
let siteURL = "http://localhost/Inventory Management/";
let pathArray = window.location.pathname.split('/');
let curFile = pathArray[pathArray.length - 1];

let curNav = document.querySelector('ul.subMenu a[href="' + siteURL + 'view/' + curFile + '"]');

if (curNav) {
    curNav.classList.add('subMenuActive');

    let mainNav = curNav.closest('li.liMainMenu');
    if (mainNav) {
        mainNav.style.background = '#f685a1';

        let subMenu = curNav.closest('.subMenu');
        let mainMenuIcon = mainNav.querySelector('i.mainMenuIconArrow');

        // Only call the function if the submenu and icon exist
        if (subMenu && mainMenuIcon) {
            showHideSubMenu(subMenu, mainMenuIcon);
        }
    }
}

//ADD HIDE ACTIVE CLASS TO MENU END
## JS CODE END