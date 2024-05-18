<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    @vite('resources/css/about.css')
</head>
<body>
@include('Navbar.navbar')
<section id="aboutUs">
    <img src="../Images/emergency-medical.png" alt="computer user">
    <div class="content">
        <h2>About Us</h2>
        <p class="description">
            The "Health Assistant" project aims to create a user-friendly and personalized health management system. Through a user registration and login system.The project will provide users some symptoms name and the user to input their symptoms, medical history, and vital information. The system will then generate a primary treatment plan along with a prescription.The prescription have all rules and regulation .And also the system provide some advice on the prescription.User records and treatments will be securely stored on the server, allowing users to access their history, provide reviews, and receive improved services based on feedback.Additionally, users will be advised to consult a medical specialist if there's no improvement within given time period. Everyday, users will received daily health tips in dashboard.
        </p>
    </div>
</section>

</body>
</html>
