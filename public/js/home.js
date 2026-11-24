document.addEventListener('DOMContentLoaded', () => {
    const themeToggle = document.getElementById('global-theme-toggle');
    const body = document.body;

    if (localStorage.getItem('cafeTheme') === 'dark') {
        body.classList.add('dark-mode');
        if (themeToggle) {
            themeToggle.textContent = '☀️ Light Mode';
        }
    }

    if (themeToggle) {
        themeToggle.addEventListener('click', () => {
            body.classList.toggle('dark-mode');
            const isDark = body.classList.contains('dark-mode');
            localStorage.setItem('cafeTheme', isDark ? 'dark' : 'light');
            themeToggle.textContent = isDark ? '☀️ Light Mode' : '🌙 Dark Mode';
        });
    }
});