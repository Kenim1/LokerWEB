// script.js
document.getElementById('profileForm').addEventListener('submit', function(event) {
    event.preventDefault();
    // Handle profile update logic here
    alert('Profile updated successfully!');
  });
  
  document.getElementById('contactForm').addEventListener('submit', function(event) {
    event.preventDefault();
    // Handle contact form submission logic here
    alert('Message sent successfully!');
  });
  // Update script.js to fetch jobs
fetch('fetch_jobs.php')
.then(response => response.text())
.then(data => {
  document.querySelector('.row').innerHTML = data;
});