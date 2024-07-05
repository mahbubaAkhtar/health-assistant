<style>
    /*navbar*/
    header{
        background-color: #fff;
        display: flex;
        justify-content: space-between;
        padding: 25px;
        box-shadow: 2px 5px 15px 2px rgb(0 0 0 / 10%);
        position: fixed;
        left: 300px;
        width: calc(100% - 22%);
        top: 0;
        z-index: 100;
        transition: left 300ms;
    }

    .user-wrapp{
        display: flex;
        align-items: center;
        margin-left: 900px;
    }
    .user-wrapp img{
        border-radius: 50%;
        margin-right: 5rem;
    }
    .logo-admin{
        cursor: pointer;
    }
    #dropdown{
        position: relative;
    }

</style>
{{--navbar--}}
<div class="content">
    <header>
        <div id="dropdown" class="user-wrapp">
            <div>
                <h4> Admin</h4>
            </div>
            <img decoding="async" src="/Images/user-profile.jpg" width="30" height="30" class="logo-admin">

        </div>
    </header>


