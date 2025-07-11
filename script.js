document.addEventListener('DOMContentLoaded', () => {
    const mainSidebar = document.querySelector('.mainSidebar');
    const mainContent = document.querySelector('.mainContent');
    const topbar = document.querySelector('.topbar');
    const navHamburger = document.getElementById('navHamburger');

    let isSidebarOpen = true;
    mainSidebar.style.marginLeft = '0px';
    topbar.style.marginLeft = '200px';
    mainContent.style.marginLeft = '215px';

    navHamburger.addEventListener('click', () => {
        if (isSidebarOpen) {
            mainSidebar.style.marginLeft = '-200px';
            topbar.style.marginLeft = '0px';
            mainContent.style.marginLeft = '0px';
            isSidebarOpen = false;
        } else {
            mainSidebar.style.marginLeft = '0px';
            topbar.style.marginLeft = '200px';
            mainContent.style.marginLeft = '215px';
            isSidebarOpen = true;
        }
    });
}); 