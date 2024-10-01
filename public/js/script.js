// Main JavaScript file: public/js/script.js

document.addEventListener('DOMContentLoaded', function() {
    // Navbar Scroll Behavior
    let lastScrollTop = 0;
    const navbar = document.querySelector('.navbar');
    const mobileBreakpoint = 991; // maximum width for mobile view

    // Hide navbar on scroll down, show on scroll up
    window.addEventListener('scroll', function() {
        let scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        if (window.innerWidth > mobileBreakpoint) {
            if (scrollTop > lastScrollTop) {
                // Scroll down
                navbar.style.top = '-60px';
            } else {
                // Scroll up
                navbar.style.top = '0';
            }
        }
        lastScrollTop = scrollTop;
    });

    // Theme Toggle Functionality
    const themeToggle = document.getElementById('theme-toggle');
    const themeIcon = document.getElementById('theme-icon');
    const themeStylesheet = document.getElementById('theme-stylesheet');

    // Check if elements are found
    if (!themeToggle || !themeIcon || !themeStylesheet) {
        console.error('Theme toggle elements not found. Make sure the IDs are correct.');
        return;
    }

    // Function to switch themes
    function setTheme(theme) {
        if (theme === 'dark') {
            themeStylesheet.href = '/css/dark-theme.css';
            themeIcon.classList.remove('bi-brightness-high');
            themeIcon.classList.add('bi-moon');
        } else {
            themeStylesheet.href = '/css/light-theme.css';
            themeIcon.classList.remove('bi-moon');
            themeIcon.classList.add('bi-brightness-high');
        }
        // Save the current theme to localStorage
        localStorage.setItem('theme', theme);
    }

    // Function to toggle between light and dark themes
    function toggleTheme() {
        const currentTheme = themeStylesheet.href.includes('dark-theme.css') ? 'dark' : 'light';
        const newTheme = currentTheme === 'dark' ? 'light' : 'dark';
        setTheme(newTheme);
    }

    // Event listener for the theme toggle button
    themeToggle.addEventListener('click', toggleTheme);

    // Apply the saved theme on page load
    const savedTheme = localStorage.getItem('theme') || 'light';
    setTheme(savedTheme);
});
