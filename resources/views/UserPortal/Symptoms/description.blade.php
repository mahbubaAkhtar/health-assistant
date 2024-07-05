<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite("resources/css/symptomsDescription.css")
    <title>Choose Symptom</title>

</head>
<body>
@include('UserPortal.Navbar.navbar')
<div class="main_container">
    <div class="container">
        <h2 class="contact-box-mess">{{ $symptom->name }}</h2>
        <p>{!! $symptom->description !!}</p>
        <a href="{{route('symptoms.questions',$symptom->id)}}">
            <button class="sendbtn">Next -></button>
        </a>
    </div>
</div>

</body>
</html>
