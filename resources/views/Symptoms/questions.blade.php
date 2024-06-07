<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fever</title>
    @vite('resources/css/symptomsQuestionnaires.css')

</head>

<body>
@include('Navbar.navbar')
<!-- Creating the form container  -->
<div class="container">
    <h1>{{$symptom->name}} Questionnaire Form</h1>

    <!-- Contains error -->
    <h4 id="errorText"></h4>

    <!-- Form element  -->
    <div class="pure_grid">
        <form id="surveyForm" action="{{ route('symptoms.questions.answer', $symptom->id) }}" method="post">
            @csrf
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" value="{{$user->name}}" required><br>

            <label for="age">Age:</label><br>
            <input type="number" id="age" name="age" value="{{$user->age}}" required><br>

            <label for="gender" >Gender</label><br>
            <input type="radio" id="gender" name="gender" value="male" {{$user->gender == 'male' ? 'checked' : ''}}>
            <label for="male">Male</label>
            <input type="radio" id="gender" name="gender" value="female" {{$user->gender == 'female' ? 'checked' : ''}}>
            <label for="female">Female</label><br>

            @foreach($questions as $question)
                @php($inputKey = 'questions[][' . $question->id . ']')
                <label for="{{'input-' .$question->id}}">{{$question->name}}</label><br>

                @if($question->input_type == 'dropdown')
                    <select @style("width: 100%;height: 33px;") name="{{$inputKey}}" required id="{{'input-' .$question->id}}">
                        @foreach($question->input_options as $option)
                            <option value="{{$option['value']}}">{{$option['name']}}</option>
                        @endforeach
                    </select><br>
                @elseif($question->input_type == 'text')
                    <input type="text" id="{{'input-' .$question->id}}" name="{{$inputKey}}" required><br>

                @elseif($question->input_type == 'number')
                    <input type="number" id="{{'input-' .$question->id}}" name="{{$inputKey}}" required value="{{ $question->concern_key == 'weight' ? $user->weight : '' }}"><br>

                @elseif($question->input_type == 'radio')
                    @foreach($question->input_options as $option)
                        <input type="radio" id="{{'input-' . $option['value'] . $question->id}}" name="{{$inputKey}}" value="{{$option['value']}}">
                        <label for="{{'input-' . $option['value'] . $question->id}}">{{$option['name']}}</label><br>
                    @endforeach

                @elseif($question->input_type == 'textarea')
                    <textarea id="{{'input-' .$question->id}}" name="{{$inputKey}}"><br> </textarea>
                @endif
            @endforeach

            <button type="submit">Submit</button>
        </form>
    </div>
</div>
</body>
</html>
