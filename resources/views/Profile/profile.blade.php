<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Custom Css -->
    @vite('resources/css/profile.css')

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">

</head>
<body>
@include('Navbar.navbar')
<!-- Main -->
<div class="main">
    <img class="user-image" src="../Images/user-profile.jpg">
    <h2>Profile</h2>
    <div class="card">
        <div class="card-body">
            <a href="{{route('edit-profile')}}"><i class="fa fa-pen fa-xs edit"></i></a>
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
                    <td>19/09/2001</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td>{{$user->email}}</td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td>Female</td>
                </tr>
                <tr>
                    <td>Critical Health Issue</td>
                    <td>:</td>
                    <td>Allergic Rhinitis</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>
        </div>
    </div>
</div>
<!-- End -->
</body>
</html>
