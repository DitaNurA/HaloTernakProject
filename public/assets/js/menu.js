
$(document).ready(function() {
    const menuButton = $('#menu-button');
    const dropdownMenu = $('#dropdown-menu');
    const menuItems = $('#menu-list li');

    // Toggle Dropdown Menu with Slide Animation
    menuButton.on('click', function() {
        dropdownMenu.slideToggle(300); // Slide the dropdown menu with animation
    });

    // Add click event for each menu item with delay
    menuItems.each(function(index) {
        $(this).on('click', function(e) {
            e.preventDefault(); // Prevent default link action
            const targetLink = $(this).find('a').attr('href');

            // Animate fade out with delay for each item
            $(this).delay(index * 300).fadeOut(200, function() {
                window.location.href = targetLink; // Redirect after animation
            });
        });
    });
});
