function toggleContactForm() {
    var contactForm = document.getElementById('contact-form');

    if (contactForm.style.display === 'none' || contactForm.style.display === '') {
        contactForm.style.display = 'block';
    } else {
        contactForm.style.display = 'none';
    }
}
export { toggleContactForm };