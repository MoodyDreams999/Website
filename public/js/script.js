document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent the default form submission

    // Get form data
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const message = document.getElementById('message').value;

    // Prepare data to be saved
    const formData = {
        name: name,
        email: email,
        message: message,
        timestamp: new Date().toISOString()
    };

    // Get existing submissions from local storage
    const submissions = JSON.parse(localStorage.getItem('contactSubmissions')) || [];

    // Add the new submission
    submissions.push(formData);

    // Save back to local storage
    localStorage.setItem('contactSubmissions', JSON.stringify(submissions));

    // Display confirmation message
    alert('Thank you for your message. We will get back to you soon.');

    // Clear the form
    document.getElementById('contactForm').reset();
});
