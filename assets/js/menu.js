// menu.js

document.addEventListener('DOMContentLoaded', function() {
    // Select all menu items that have children
    const menuItems = document.querySelectorAll('.menu-item-has-children');
   
    // Add click event listener to each menu item
    menuItems.forEach(function(menuItem) {
       menuItem.addEventListener('click', function(event) {
         // Prevent the default action of the link
         event.preventDefault();
   
         // Toggle the display of the sub-menu
         const subMenu = this.querySelector('.sub-menu');
         subMenu.style.display = subMenu.style.display === 'block' ? 'none' : 'block';
       });
    });
   });