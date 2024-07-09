<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/prescription.css')
    <title>Document</title>
</head>
<body>

<div class="wrapper">
    @if($prescription)
        <div class="prescription_form">
        <table class="prescription" border="1">
            <tbody>
            <tr>
                <td colspan="2">
                    <div class="header">
                        <div class="logo"><img src="/Images/logo.png"></div>
                        <div class="credentials">
                            <p>Patient Name : {{$prescription->patient_name}}</p>
                            <p>Age : {{$prescription->patient_age}}</p>
                            <p>Gender : {{$prescription->patient_gender}}</p>
                        </div>
                    </div>
                </td>
            </tr>
            <tr>
                <td class="desease">
                    <div class="desease_details">
                        <div class="symptoms">
                            <h4 class="d-header">Symptoms</h4>
                            <ul @style("font-size: 14px")>
                                <li>{{$prescription->symptom}}</li>
                            </ul>
                        </div>
                        <div class="advice">
                            <h4 class="d-header">Advice</h4>
                            {!! $prescription->advice !!}
                        </div>
                    </div>
                </td>
                <td valign="top"><span style="font-size: 2em">R<sub>x</sub></span>
                    <hr/>

                    @php($slNumber = 1)
                    @foreach($prescription->prescriptionMedicines as $index => $medicine)
                        <div class="medicine"><p class="medicine-name"><b>{{$slNumber}}. {{$medicine->generic->type}}
                                    &nbsp;{{$medicine->generic->name . ' ' . $medicine->generic->strength}} </b></p>
                            <p>{{$medicine->genericDose->dose}} &nbsp; &nbsp;
                                &nbsp; {{$medicine->genericDose->duration}}</p></div>
                        @php($slNumber++)

                        @if($requiredGeneric = $medicine->generic->requiredGeneric)
                            <div class="medicine"><p class="medicine-name"><b>{{$slNumber}}. {{$requiredGeneric->type}}
                                        &nbsp;{{$requiredGeneric->name . ' ' . $requiredGeneric->strength}} </b></p>
                                <p>{{$medicine->genericDose->dose}} &nbsp; &nbsp;
                                    &nbsp; {{$medicine->genericDose->duration}}</p></div>
                            @php($slNumber++)
                        @endif
                    @endforeach
                </td>
            </tr>

            </tbody>
        </table>


        @include('UserPortal.Review.review')
    </div>
    @else
        <h1>No prescription, Because not taken any consultation</h1>
    @endif
</div>
</body>
</html>
