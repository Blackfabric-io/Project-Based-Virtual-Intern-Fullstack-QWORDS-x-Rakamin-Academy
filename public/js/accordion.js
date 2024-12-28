document.addEventListener('DOMContentLoaded', function() {
    // FAQ Accordion functionality
    document.querySelectorAll('.faq-accordion button').forEach(button => {
        button.addEventListener('click', () => {
            const content = button.nextElementSibling;
            content.classList.toggle('hidden');
            button.querySelector('span.float-right').textContent = content.classList.contains('hidden') ? '+' : '-';
        });
    });

    // Mobile menu functionality
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const mobileMenu = document.getElementById('mobile-menu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', function() {
            mobileMenu.classList.toggle('hidden');
        });
    }
});
