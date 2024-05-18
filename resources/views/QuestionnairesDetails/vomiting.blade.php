<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Vomiting</title>
    @vite('resources/css/symptomsQuestionnaires.css')

</head>

<body>
@include('Navbar/navbar')
<!-- Creating the form container  -->
<div class="container">
    <h1>Vomiting Questionnaire Form</h1>

    <!-- Contains error -->
    <h4 id="errorText"></h4>

    <!-- Form element  -->
    <div class="pure_grid">
        <form id="surveyForm">
            <label for="name">Name:</label><br>
            <input type="text" id="name" name="name" required><br>

            <label for="age">Age:</label><br>
            <input type="number" id="age" name="age" required><br>

            <label for="temperature">How many times have you vomited?</label><br>
            <input type="number" id="temperature" name="temperature" required><br>

            <label for="stomachPain">Do you have stomach pain?</label><br>
            <input type="radio" id="stomachPain" name="stomachPain" value="yes">
            <label for="yes">Yes</label>
            <input type="radio" id="stomachPain" name="stomachPain" value="no" >
            <label for="no">No</label><br>

            <label for="weak">Do you feel very weak?</label><br>
            <input type="radio" id="weak" name="weak" value="yes">
            <label for="yes">Yes</label>
            <input type="radio" id="weak" name="weak" value="no">
            <label for="no">No</label><br>


            <label for="feedback">If you have any other health issue,let us know here.Like-Diabetes,Hypertension etc.. (optional):</label><br>
            <input type="textarea" id="feedback" name="feedback"><br>

            <a href="Fever_Prescription.html"><button type="submit">Submit</button></a>
        </form>
    </div>
</div>
<script>
    // Script.js
    // Adding event listener to the form element
    document
        .getElementById("surveyForm")
        .addEventListener(
            "submit",
            function (event) {
                // PreventDefault() is used to avoid
                // Refreshing of browser while submit
                event.preventDefault();

                let nameField =
                    document.getElementById(
                        "name"
                    );
                let ageField =
                    document.getElementById(
                        "age"
                    );
                let errorText =
                    document.getElementById(
                        "errorText"
                    );

                let name = nameField.value;
                let age = ageField.value;

                // Creating a regular expression for
                // Name field
                let Regex = /^[A-Za-z ]+$/;

                // If name does not matches the
                // Regular expression
                if (!name.match(Regex)) {
                    nameField.classList.add(
                        "error"
                    );
                    errorText.innerHTML =
                        `Name field should only contain
					English alphabets and spaces`;
                    errorText.classList.add(
                        "errorText"
                    );
                    return;
                }

                // Check whether age is between 1 and 150
                else if (
                    isNaN(age) ||
                    age < 1 ||
                    age > 150
                ) {
                    ageField.classList.add(
                        "error"
                    );
                    errorText.innerHTML =
                        `Age should only contain valid
					values ( 1 - 150 )`;
                    errorText.classList.add(
                        "errorText"
                    );
                    return;
                }

                // Removing red border in name field
                if (
                    nameField.classList.contains(
                        "error"
                    )
                )
                    nameField.classList.remove(
                        "error"
                    );

                // Removing red border in age field
                if (
                    ageField.classList.contains(
                        "error"
                    )
                )
                    ageField.classList.remove(
                        "error"
                    );

                // Adding success message and styles
                errorText.innerHTML =
                    "Submitted Successfully";
                errorText.classList.add(
                    "successText"
                );

                const formData =
                    new FormData(
                        event.target
                    );
                const formValues = {};

                // Storing each values in the object
                formData.forEach(
                    (value, key) => {
                        formValues[key] =
                            value;
                    }
                );

                // Calling convert function
                const csvContent =
                    convertToCSV(
                        formValues
                    );
                const blob = new Blob(
                    [csvContent],
                    { type: "text/csv" }
                );

                // Reseting the form after certain
                // Timeout 2000ms => 2s
                setTimeout(
                    document
                        .getElementById(
                            "surveyForm"
                        )
                        .reset(),
                    2000
                );
            }
        );

    // Function to convert object to csv
    function convertToCSV(objArr) {
        const array =
            typeof objArr !== "object"
                ? JSON.parse(objArr)
                : objArr;
        let result = "";

        // Add commas to make it as csv
        const header =
            Object.keys(array).join(",") +
            "\n";
        result += header;

        for (const item in array) {
            if (
                array.hasOwnProperty(item)
            ) {
                result += array[item] + ",";
            }
        }
        result = result.slice(0, -1);
        result += "\n";

        return result;
    }

</script>
</body>
</html>
