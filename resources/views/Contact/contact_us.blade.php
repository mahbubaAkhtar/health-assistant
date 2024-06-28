<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Contact Page Design</title>
    @vite("resources/css/contactUs.css")
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
@include('Navbar.navbar')
<div class="main_container">
    <div class="container">
        <h2 class="contact-box-mess">Get in touch</h2>
        <p>Feel free to contact us about anything related to<span class="contact-box-mess"><b>Health Issue </b></span>
            OR <span class="contact-box-mess"><b>System's Issue</b></span></p>
        <form class="contact-form">
            <div class="input-area">
                <input type="text" placeholder="Your name"/>
            </div>
            <div class="input-area">
                <input type="email" placeholder="Email address"/>
            </div>
            <div class="input-area">
                <input type="text" placeholder="Subject"/>
            </div>
            <div class="input-area h-80">
                <textarea placeholder="Your message"></textarea>
            </div>
            <button class="sendbtn">Send</button>
        </form>
    </div>
</div>
</body>
</html>
