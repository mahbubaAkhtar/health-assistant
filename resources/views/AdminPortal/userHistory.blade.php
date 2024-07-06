<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User History</title>
    <style>
        /*font style*/
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap');

        .user-history-content {
            margin-top: 80px;
            padding: 8px;
        }

        .user-history-title {
            padding-bottom: 10px;
            font-size: 20px;
            margin-left: 50%;
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
<div class="user-history-content">
    <span class="user-history-title"><b>User History</b></span>
    <table id="customers">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>weight</th>
            <th></th>
        </tr>

        @foreach($users as $user)
            <tr>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->gender ?? "N/A"}}</td> {{-- ?? its null safe operation--}}
                <td>{{$user->dob ?? "N/A"}}</td>
                <td>{{$user->weight ?? "N/A"}}</td>
                <td>
                    <a href="/admin/users/{{$user->id}}/profile">
                        <b>See Detail</b>
                    </a>
                </td>
            </tr>>

        @endforeach


    </table>
</div>
</body>
</html>
