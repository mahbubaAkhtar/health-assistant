<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>

    <!-- Custom Css -->
    @vite('resources/css/editProfile.css')

    <!-- FontAwesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
</head>

<body>
@include('UserPortal.Navbar.navbar')
<!-- Main -->
<div class="main">
    <img class="user-image" src="../Images/user-profile.jpg">
    <h2>Profile</h2>
    <div class="card">
        <div class="card-body">
            <form method="POST" action="{{ route('update-profile') }}">
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
<!-- End -->
</body>
</html>
