<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>

    {{--    add css--}}
    @vite("resources/css/home.css")
</head>
<body>
@include('UserPortal.Navbar.navbar')

<!--Slider-->
<div class="slideshow-container">

    @foreach($tips as $healthTips)
        <div class="mySlides fade">
            <img src="{{$healthTips->image_src}}" style="width:100%; height: 350px">
        </div>
    @endforeach

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
    @foreach($tips as $index => $healthTips)
        <span class="dot" onclick="currentSlide({{$index+1}})"></span>
    @endforeach
</div>

<script>
    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
</script>


<!-- select Symptoms -->
<div>
    <section class="Symptom">
        <h2 class="Symptom-category"><b>SELECT SYMPTOM</b></h2>
        <div class="Symptom-container">
            @foreach($symptoms as $symptom )
                <div class="Symptom-card">
                    <div class="Symptom-image">
                        <img src="{{$symptom->image_src}}" class="Symptom-box" alt="">
                        <a href="{{route('symptoms.view', $symptom->id)}}">
                            <button class="symptom-description-button">Choose Symptom</button>
                        </a>
                    </div>
                    <div class="Symptom-info">
                        <h2 class="Symptom-brand">{{$symptom->name}}</h2>
                    </div>
                </div>
            @endforeach


        </div>
    </section>
</div>

<!--footer-->
<div>
    <footer class="footer">
        <div class="waves">
            <div class="wave" id="wave1"></div>
            <div class="wave" id="wave2"></div>
            <div class="wave" id="wave3"></div>
            <div class="wave" id="wave4"></div>
        </div>
        <ul class="menu">
            <li class="menu__item"><a class="menu__link" href="{{route('home')}}">Home</a></li>
            <li class="menu__item"><a class="menu__link" href="{{route('about')}}">About</a></li>
            <li class="menu__item"><a class="menu__link" href="{{route('termsConditions')}}">Terms & Conditions</a></li>
            <li class="menu__item"><a class="menu__link" href="{{route('show-contact')}}">Contact</a></li>

        </ul>
        <p>&copy;2024 Mahbuba Akhtar | All Rights Reserved</p>
    </footer>
    <!--    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>-->
    <!--    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>-->
</div>

</body>
</html>
