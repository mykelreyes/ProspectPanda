/**
 * ProspectPanda - Theme Toggle
 * Allows users to switch between light and dark themes
 */

(function() {
    'use strict';

    // Get theme from localStorage or default to dark
    const getTheme = () => localStorage.getItem('theme') || 'dark';

    // Set theme and save to localStorage
    const setTheme = (theme) => {
        localStorage.setItem('theme', theme);
        document.body.classList.toggle('home-light', theme === 'light');

        // Update logos
        updateLogos(theme);

        // Update theme toggle button icon
        updateToggleIcon(theme);
    };

    // Update all logo images based on theme
    const updateLogos = (theme) => {
        const logoImages = document.querySelectorAll('.navbar__logo img, .logo img, .footer .logo img');
        const logoSrc = theme === 'light' ? 'assets/images/logo-light.png' : 'assets/images/logo.png';

        logoImages.forEach(img => {
            img.src = logoSrc;
        });
    };

    // Update toggle button icon
    const updateToggleIcon = (theme) => {
        const toggleBtn = document.getElementById('themeToggle');
        if (toggleBtn) {
            const icon = toggleBtn.querySelector('i');
            if (icon) {
                icon.className = theme === 'light' ? 'fa-solid fa-moon' : 'fa-solid fa-sun';
            }
        }
    };

    // Initialize theme on page load
    const initTheme = () => {
        const theme = getTheme();
        setTheme(theme);
    };

    // Toggle theme
    const toggleTheme = () => {
        const currentTheme = getTheme();
        const newTheme = currentTheme === 'light' ? 'dark' : 'light';
        setTheme(newTheme);
    };

    // Initialize when DOM is ready
    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', initTheme);
    } else {
        initTheme();
    }

    // Add event listener to toggle button when DOM is ready
    document.addEventListener('DOMContentLoaded', () => {
        const toggleBtn = document.getElementById('themeToggle');
        if (toggleBtn) {
            toggleBtn.addEventListener('click', (e) => {
                e.preventDefault();
                toggleTheme();
            });
        }
    });

    // Export for global access
    window.themeToggle = {
        toggle: toggleTheme,
        set: setTheme,
        get: getTheme
    };
})();
