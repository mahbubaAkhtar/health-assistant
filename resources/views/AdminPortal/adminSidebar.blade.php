<style>
    /*sidebar*/
    *{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        list-style-type: none;
        text-decoration: none;
        font-family: 'verdana';
    }
    #nav_logo{
        width: 270px;
        padding: 10px 0 0 10px;
    }
    .sidebar{
        width: 300px;
        position: fixed;
        left: 0;
        top: 0;
        height: 100vh;
        background: #008ea1;
        z-index: 100;
        transition: width 300ms;
    }
    .sidebar-brand{
        height: 90px;
        padding: 1rem 0rem 1rem 2rem;
        color: #fff;
    }
    .sidebar-menu{
        margin-top: 1rem;
    }
    .sidebar-menu a{
        padding-left: 1rem;
        display: block;
        color: #fff;
        font-size: 1.1rem;
    }
    .sidebar-menu li{
        width: 100%;
        margin-bottom: 2rem;
        padding-left: 10%;
    }

    .sidebar-menu li:hover{
        background-color: #2b87ff;
        height: 50px;

    }
    .content{
        transition: margin-left 300ms;
        margin-left: 22%;
    }
</style>

{{--sidebar--}}
<div class="sidebar">
    <div class="sidebar-brand">
        <!------LOGO SECTION---->
        <div class="nav-logo-section">
            <img id="nav_logo" src="/Images/logo.png">
        </div>
    </div>

    <div class="sidebar-menu">
        <ul>
            <li><a href="/admin/dashboard" ><i class='bx bxs-dashboard'></i>Dashboard</a></li>
            <li><a href="/admin/users"><i class='bx bx-user-circle'></i>User</a></li>
            <li><a href="/admin/consultations"><i class='bx bx-user-circle'></i>Consultation</a></li>
        </ul>
    </div>
</div>
