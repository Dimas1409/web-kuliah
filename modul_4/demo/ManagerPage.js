document.addEventListener('DOMContentLoaded', function() {
    if (window.location.pathname.includes('LandingPage.html')) {
        const logo = document.querySelector('.logo a');
        if (logo) {
            logo.addEventListener('click', function(event) {
                event.preventDefault();
                window.location.href = 'LandingPage.html';
            });
        }
    }

    if (window.location.pathname.includes('Contact.html')) {
        const contactForm = document.querySelector('.contact-form');
        if (contactForm) {
            contactForm.addEventListener('submit', function(event) {
                event.preventDefault();
                const name = document.querySelector('#name').value;
                const email = document.querySelector('#email').value;
                const phone = document.querySelector('#phone').value;
                const message = document.querySelector('#message').value;

                console.log('Form Submitted!');
                console.log('Name:', name);
                console.log('Email:', email);
                console.log('Phone:', phone);
                console.log('Message:', message);

                alert('Your message has been sent successfully!');
                contactForm.reset();
            });
        }
    }
});
