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
@include('Navbar.navbar')
<!-- Main -->
<div class="main">
    <img class="user-image" src="../Images/user-profile.jpg">
    <h2>Profile</h2>
    <div class="card">
        <div class="card-body">

            <table>
                <tbody>
                <tr>
                    <td>Name</td>
                    <td>:</td>
                    <td><input type="text" name="name" class="form-control" value="" required ></td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td>:</td>
                    <td> <input type="date" name="birthday" class="form-control" value="" required></td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>:</td>
                    <td><input type="email" name="email" class="form-control" value="" required></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>:</td>
                    <td> <select name="gender" class="form-control" value="" required>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                    </td>
                </tr>
                <tr>
                    <td>Critical Health Issue</td>
                    <td>:</td>
                    <td><input type="textarea" name="health issue" class="form-control"></td>
                </tr>
                </tbody>
            </table>
                    <div class="form-group">
                        <input type="submit" class="btn btn-success" value="Save">
                    </div>
        </div>
    </div>
</div>
<!-- End -->
</body>
</html>
