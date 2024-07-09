<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <style>
        /*font style*/
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@1,600&display=swap');
        /* Main */
        .main {
            margin-top: 2%;
            margin-left: 304px;
            font-size: 28px;
            padding: 0 10px;
            width: 58%;
        }

        .main h2 {
            color: #333;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 24px;
            margin-bottom: 10px;
            margin-left: 335px;
        }

        .main .card {
            background-color: #fff;
            border-radius: 18px;
            box-shadow: 1px 1px 8px 0 grey;
            height: auto;
            margin-bottom: 20px;
            margin-top: 145px;
            padding: 20px 0 20px 50px;
        }

        .main .card table {
            border: none;
            font-size: 16px;
            height: 270px;
            width: 80%;
        }

        .edit {
            position: absolute;
            color: #e7e7e8;
            right: 14%;
            margin-right: 120px;
        }
        /* End */

    </style>
    <title>User Profile</title>
</head>
<body>
@include('AdminPortal.adminSidebar')
@include('AdminPortal.adminNavbar')
<div class="main">
    <div class="card">
        <div class="card-body">
            <a href="/admin/users/{{$user->id}}/admin-edit-profile"><i class="fa fa-pen fa-xs edit"></i></a>
            <table>
                <tbody>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td>{{$user->name}}</td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>:</td>
                    <td>{{$user->dob}}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{$user->email}}</td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>{{$user->gender}}</td>
                </tr>
                <tr>
                    <td>Weight</td>
                    <td>:</td>
                    <td>{{$user->weight}}</td>
                </tr>
                <tr>
                    <td>Critical Health Issue</td>
                    <td>:</td>
                    <td>{{$user->critical_health_issue}}</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
