<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User Consultation History</title>
    <style>
        /*font style*/
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap');

        .user-consultation-history-content {
            margin-top: 80px;
            padding: 8px;
        }

        .user-consultation-history-title {
            padding-bottom: 10px;
            font-size: 20px;
            margin-left: 42%;
        }

        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #b7e1ee;
            color: white;
        }

    </style>
</head>
<body>
@include('AdminPortal.adminSidebar')
@include('AdminPortal.adminNavbar')
<div class="user-consultation-history-content">
    <span class="user-consultation-history-title"><b>User Consultation History</b></span>
    <table id="customers">
        <tr>
            <th>User Name</th>
            <th>User Contact</th>
            <th>Symptom</th>
            <th>prescription</th>
        </tr>

        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="#">See prescription</a></td>
        </tr>


    </table>
</div>
</body>
</html>
