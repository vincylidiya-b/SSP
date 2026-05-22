document.addEventListener('DOMContentLoaded', function() {
    const popup = document.getElementById('popup');
    const openPopup = document.getElementById('openPopup');
    const closePopup = document.getElementById('closePopup');

    openPopup.addEventListener('click', function(event) {
        event.preventDefault(); // Prevent the default anchor behavior
        popup.classList.add('show'); // Add the class to show the popup
    });

    closePopup.addEventListener('click', function() {
        popup.classList.remove('show'); // Remove the class to hide the popup
    });

    // Optional: Close the popup when clicking outside of it
    window.addEventListener('click', function(event) {
        if (event.target === popup) {
            popup.classList.remove('show');
        }
    });
});