// JavaScript to enable hover effect or dynamic changes (optional)
document.querySelectorAll('.recipe-card').forEach(card => {
    card.addEventListener('mouseover', () => {
        card.style.transform = 'scale(1.05)';
    });
    card.addEventListener('mouseout', () => {
        card.style.transform = 'scale(1)';
    });
});
// Smooth scroll for anchor links (if you have them)
document.querySelectorAll('a[href^="ReAbout.php"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        
        document.querySelector(this.getAttribute('recipe-card')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
