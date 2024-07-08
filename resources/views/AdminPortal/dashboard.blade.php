<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/adminDashboard.css')
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Dashboard</title>
</head>
<body>
@include('AdminPortal.adminSidebar')
@include('AdminPortal.adminNavbar')
{{--dashboard--}}
<main>
    <div class="cards">
        <div class="card-single">
            <div>
                <h2>{{$userCount}}</h2>
                <a href="/admin/users"><h2>Users</h2></a>
            </div>
        </div>

        <div class="card-single">
            <div>
                <h2>{{ $consultationCount}}+</h2>
                <a href="/admin/consultations"><h2>Consultations</h2></a>
            </div>
        </div>

{{--        <div class="card-single">--}}
{{--            <div>--}}
{{--                <h2>{{$adminCount}}</h2>--}}
{{--                <a href="/admin/admins"><h2>Total Admin</h2></a>--}}
{{--            </div>--}}
{{--        </div>--}}

    </div>
    </div>
</main>
</div>
</body>
</html>
