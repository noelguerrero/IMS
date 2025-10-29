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