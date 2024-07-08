<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/history.css')
    <title>History</title>
</head>
<body>
@include('UserPortal.Navbar.navbar')
<div class="history-content">
    <span class="history-title">History</span>
    <table id="customers">
        <tr>
            <th>Date</th>
            <th>Patient Name</th>
            <th>Patient Age</th>
            <th>Patient Gender</th>
            <th>Symptom Name</th>
            <th>View Prescription</th>
        </tr>
        @if(count($consultations) >0)
        @foreach($consultations as $consultation)
            <tr>
                <td>{{$consultation->created_at}}</td>
                <td>{{$consultation->prescription->patient_name}}</td>
                <td>{{$consultation->prescription->patient_age}}</td>
                <td>{{$consultation->prescription->patient_gender}}</td>
                <td>{{$consultation->symptom->name}}</td>
                <td><a href="{{route('prescription.show', $consultation->prescription->id)}}">Preview Prescription</a>
                </td>
            </tr>
        @endforeach
        @else
            <p>No History, Because not taken any consultation</p>
        @endif


    </table>
</div>
</body>
</html>
