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
    <div class="social-container">
        <div class="custom-social-container">
            <p>Contact me on</p>
            <button class="cross-btn"><i class="fas fa-times"></i></button>
            <ul>
                <li>
                    <a
                        href="#"
                        target="_blank"
                        rel="nofollow"
                    >
                        <i class="fab fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        target="_blank"
                        rel="nofollow"
                    >
                        <i class="fab fa-youtube"></i>
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        target="_blank"
                        rel="nofollow"
                    >
                        <i class="fab fa-facebook"></i>
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        target="_blank"
                        rel="nofollow"
                    >
                        <i class="fab fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a
                        href="#"
                        target="_blank"
                        rel="nofollow"
                    >
                        <i class="fab fa-linkedin"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <button class="connect-btn">Get Connected</button>
</div>
<script>
    const contactform = document.querySelector('.contact-form');
    const container = document.querySelector('.container');

    contactform.addEventListener('submit', (event) => {
        event.preventDefault();
        container.innerHTML = '<p>Thanks for your message. <br /> I\'ll respond to you shortly</p>';
    });

    const connectbtn = document.querySelector('.connect-btn');
    const crossbtn = document.querySelector('.cross-btn');
    const socialcontainer = document.querySelector('.social-container');

    connectbtn.addEventListener('click', () => {
        socialcontainer.classList.toggle('visible')
    });

    crossbtn.addEventListener('click', () => {
        socialcontainer.classList.remove('visible')
    });
</script>
</body>
</html>
