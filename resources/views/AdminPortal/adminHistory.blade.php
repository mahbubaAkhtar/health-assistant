<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Admin History</title>
    <style>
        /*font style*/
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap');

        .admin-history-content {
            margin-top: 95px;
            margin-left: 300px;
            padding: 8px;
        }

        .admin-history-title {
            padding-bottom: 10px;
            font-size: 20px;
            margin-left: 46%;
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
<div class="admin-history-content">
    <span class="admin-history-title"><b>Admin History</b></span>
    <table id="customers">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>weight</th>
        </tr>

        @foreach($admins as $admin)                {{--@foreach($controllerkey as $anyvariable)--}}
            <tr>
                <td>{{$admin->name}}</td>          {{--<td>{{$anyvariable->name}}</td>--}}
                <td>{{$admin->email}}</td>
                <td>{{$admin->gender ?? "N/A"}}</td> {{-- ?? its null safe operation--}}
                <td>{{$admin->dob ?? "N/A"}}</td>
                <td>{{$admin->weight ?? "N/A"}}</td>

            </tr>

        @endforeach

    </table>
</div>
</body>
</html>
