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
@include('UserPortal.Navbar.navbar')
<div class="main_container">
    <div class="container">
        <h2 class="contact-box-mess">Get in touch</h2>
        <p>Feel free to contact us about anything related to<span class="contact-box-mess"><b>Health Issue </b></span>
            OR <span class="contact-box-mess"><b>System's Issue</b></span></p>
        <form class="contact-form" method="POST" action="/contact_us">
            @csrf
            <div class="input-area">
                <input type="text" placeholder="Your name" name="name" value="{{$user->name}}"/>
            </div>
            <div class="input-area">
                <input type="email" placeholder="Email address" name="email" value="{{$user->email}}"/>
            </div>
            <div class="input-area">
                <input type="text" placeholder="Subject" name="subject"/>
            </div>
            <div class="input-area h-80">
                <textarea placeholder="Your message" name="message"></textarea>
            </div>
            <button type="submit" class="sendbtn">Send</button>
            @if (session('message'))
                <div class="alert">{{ session('message') }}</div>
            @endif
        </form>
    </div>
</div>
</body>
</html>
