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

    .user-name{
        font-size: 18px;
        font-weight: 600;
    }
    .user-wrapp img{
        border-radius: 50%;
        margin-right: 5rem;
    }
    .logo-admin{
        cursor: pointer;
    }
    /* Dropdown menu */
    .dropdown {
        position: relative;
        float: left;

    }

    .dropdown-toggle {
        display: none;
    }

    .dropdown-options {
        cursor: pointer;
    }

    .dropdown-content {
        position: absolute;
        top: 100%;
        left: -30px;
        float: left;
        background-color: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        z-index: 1;
        display: none;
        text-align: left;
        width: 156px;

    }

    .dropdown-content a {
        display: block;
        padding: 10px;
        text-decoration: none;
        color: black;
    }

    .dropdown-content a:hover {
        background-color: #f0f0f0;
    }

    .dropdown-toggle:checked + .dropdown-options + .dropdown-content {
        display: block;
    }


</style>
{{--navbar--}}
<div class="content">
    <header>
        <div style="width: 100%; margin-left: 85%">
            <div class="nav-menu" >
                <div class="dropdown">
                    <input type="checkbox" id="profile-dropdown-toggle" class="dropdown-toggle" >
                    <label for="profile-dropdown-toggle"  class="dropdown-options link">
                        {{auth()->user()->name}} <i class='nav-menu-icon bx bx-user-circle'></i>
                    </label>
                    <div class="dropdown-content">
                        <form method="POST" action="/admin/logout">
                            @csrf

                            <x-dropdown-link href='/admin/logout'
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>
</div>
