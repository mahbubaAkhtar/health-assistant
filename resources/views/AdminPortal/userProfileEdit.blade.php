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

        .form-control{
            border-radius: 6px;
            height: 27px;
            width: 260px;
        }
        /*Save*/
        .form-group {
            margin-left: 212px;
        }
        .submit {
            text-align: center;
        }
        .btn-success {
            padding: 7px 60px;
            background-color: #2b87ff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-success:hover {
            background-color: #23096b;
        }
    </style>

    <title>Edit user Profile</title>
</head>
<body>
@include('AdminPortal.adminSidebar')
@include('AdminPortal.adminNavbar')
<div class="main">
    <div class="card">
        <div class="card-body">
            <form method="POST" action="/admin/users/{{$user->id}}/update-user">
                @csrf
                <table>
                    <tbody>
                    <tr>
                        <td>Name</td>
                        <td>:</td>
                        <td><input type="text" name="name" class="form-control" value="{{$user->name}}" required></td>
                    </tr>
                    <tr>
                        <td>Date of Birth</td>
                        <td>:</td>
                        <td><input type="date" name="dob" class="form-control" value="{{$user->dob}}" required></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>:</td>
                        <td><input type="email" name="email" class="form-control" value="{{$user->email}}" required></td>
                    </tr>
                    <tr>
                        <td>Gender</td>
                        <td>:</td>
                        <td><select name="gender" class="form-control" required>
                                <option value="female" @if($user->gender == 'female') selected @endif>Female</option>
                                <option value="male" @if($user->gender == 'male') selected @endif>Male</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Weight</td>
                        <td>:</td>
                        <td><input type="number" name="weight" class="form-control" value="{{$user->weight}}" ></td>
                    </tr>
                    <tr>
                        <td>Critical Health Issue</td>
                        <td>:</td>
                        <td><input type="textarea" name="critical_health_issue" value="{{$user->critical_health_issue}}"
                                   class="form-control"></td>
                    </tr>
                    </tbody>
                </table>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
</body>
</html>
