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
@include('Navbar.navbar')

<!--Slider-->
<div class="slideshow-container">

    <div class="mySlides fade">
        <img src="../Images/health_tips_01.webp" style="width:100%;">
    </div>

    <div class="mySlides fade">
        <img src="../Images/health_tips_02.webp" style="width:100%; height: 350px;">
    </div>

    <div class="mySlides fade">
        <img src="../Images/health_tips_03.jpg" style="width:100%; height: 350px;">

    </div>

    <a class="prev" onclick="plusSlides(-1)">❮</a>
    <a class="next" onclick="plusSlides(1)">❯</a>

</div>
<br>

<div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span>
    <span class="dot" onclick="currentSlide(2)"></span>
    <span class="dot" onclick="currentSlide(3)"></span>
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
            <div class="Symptom-card">
                <div class="Symptom-image">
                    <img src="../Images/fever.png" class="Symptom-box" alt="">
                    <a href="{{route('symptoms-fever')}}">
                        <button class="symptom-description-button">Choose Symptom</button>
                    </a>
                </div>
                <div class="Symptom-info">
                    <h2 class="Symptom-brand">Fever</h2>
                </div>
            </div>

            <div class="Symptom-card">
                <div class="Symptom-image">
                    <img src="../Images/Food_Poisoning.png" class="Symptom-box" alt="">
                    <a href="{{route('symptoms-foodPoisoning')}}">
                        <button class="symptom-description-button">Choose Symptom</button>
                    </a>
                </div>
                <div class="Symptom-info">
                    <h2 class="Symptom-brand">Food poisoning</h2>
                </div>
            </div>

            <div class="Symptom-card">
                <div class="Symptom-image">
                    <img src="../Images/Migraine.jpg" class="Symptom-box" alt="">
                    <a href="{{route('symptoms-migraine')}}">
                        <button class="symptom-description-button">Choose Symptom</button>
                    </a>
                </div>
                <div class="Symptom-info">
                    <h2 class="Symptom-brand">MIGRAINE</h2>
                </div>

            </div>
            <div class="Symptom-card">
                <div class="Symptom-image">
                    <img src="../Images/back_pain.png" class="Symptom-box" alt="">
                    <a href="{{route('symptoms-lowBackPain')}}">
                        <button class="symptom-description-button">Choose Symptom</button>
                    </a>
                </div>
                <div class="Symptom-info">
                    <h2 class="Symptom-brand">LOW BACK PAIN</h2>
                </div>
            </div>

            <div class="Symptom-card">
                <div class="Symptom-image">
                    <img src="../Images/caugh.jpg" class="Symptom-box" alt="">
                    <a href="{{route('symptoms-caugh')}}">
                        <button class="symptom-description-button">Choose Symptom</button>
                    </a>
                </div>
                <div class="Symptom-info">
                    <h2 class="Symptom-brand">CAUGH</h2>
                </div>
            </div>

            <div class="Symptom-card">
                <div class="Symptom-image">
                    <img src="../Images/Scabies.webp" class="Symptom-box" alt="">
                    <a href="{{route('symptoms-scabies')}}">
                        <button class="symptom-description-button">Choose Symptom</button>
                    </a>
                </div>
                <div class="Symptom-info">
                    <h2 class="Symptom-brand">SCABIES</h2>
                </div>
            </div>

            <div class="Symptom-card">
                <div class="Symptom-image">
                    <img src="../Images/vomiting.webp" class="Symptom-box" alt="">
                    <a href="{{route('symptoms-vomiting')}}">
                        <button class="symptom-description-button">Choose Symptom</button>
                    </a>
                </div>
                <div class="Symptom-info">
                    <h2 class="Symptom-brand">VOMITING</h2>
                </div>
            </div>

            <div class="Symptom-card">
                <div class="Symptom-image">
                    <img src="../Images/viral_fever.jpg" class="Symptom-box" alt="">
                    <a href="{{route('symptoms-viralFever')}}">
                        <button class="symptom-description-button">Choose Symptom</button>
                    </a>
                </div>
                <div class="Symptom-info">
                    <h2 class="Symptom-brand">VIRAL FEVER</h2>
                </div>
            </div>

            <div class="Symptom-card">
                <div class="Symptom-image">
                    <img src="../Images/Sore_throat.webp" class="Symptom-box" alt="">
                    <a href="{{route('symptoms-soreThroat')}}">
                        <button class="symptom-description-button">Choose Symptom</button>
                    </a>
                </div>
                <div class="Symptom-info">
                    <h2 class="Symptom-brand">SORE THROAT</h2>
                </div>
            </div>

            <div class="Symptom-card">
                <div class="Symptom-image">
                    <img src="../Images/Allergic_Rhinitis.jfif" class="Symptom-box" alt="">
                    <a href="{{route('symptoms-allergicRhinitis')}}">
                        <button class="symptom-description-button">Choose Symptom</button>
                    </a>
                </div>
                <div class="Symptom-info">
                    <h2 class="Symptom-brand">ALLERGIC RHINITIS</h2>
                </div>
            </div>

        </div>
    </section>
</div>

</body>
</html>
