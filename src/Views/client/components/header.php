<style>
        .menu-bar{

        }
        .dropdown-menu{
            margin-left: 40px;
            margin-top: -20px;
        }
        .dropdown-menu li{
            margin: 0;
            padding: 0;
        }
        .dropdown-menu li:hover{
            background-color: white;
        }
        .nav-bar{
            display: block;
            padding-left: 20px;
        }
        .nav-bar:hover{
            background-color: white;
            color: #4099ff;
        }
    </style>
<div class="background-header">
    <header class="container">
        <div class="header">
            <div class="left-header"><a href="/"><img class="logo" src="http://nhom_7.test/asset-client/Image/N.png" alt="logo"></a></div>
            <div class="right-header">
                <div class="account">
                    <a href="/client/user"><img src="https://i.pinimg.com/564x/cd/b4/7c/cdb47c30099f448dd179e9ca475d98c5.jpg"
                            alt="your avatar" class="avatar"></a>
                </div>
                <div class="menu-mini">
                    <li class="user-profile header-notification menu-bar cog" onclick="list_menu()">
                        <div class="dropdown-primary dropdown">
                            <i class="fa-sharp fa-solid fa-gears fa-2xl"></i>
                            <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn"
                                data-dropdown-out="fadeOut">
                                    <?php
                                        use Ductong\BaseMvc\Models\User;

                                        if (isset($_SESSION['name_account']) && isset($_SESSION['id_user']) && isset($_SESSION['id_role'])) {
                                            if (isset($_SESSION['name_account']) && isset($_SESSION['id_user'])) {
                                                $user = (new User)->findOne($_SESSION['id_user']);
                                                $_SESSION['id_role'] = $user['id_role'];
                                                $_SESSION['name_account'] = $user['name_account'];
                                            }
                                            if ($_SESSION['id_role']==2) {
                                                echo "                                    
                                                <li>
                                                    <a href='/client/writer' class='nav-bar'>
                                                        <i class='fa-solid fa-feather'></i> Profile
                                                    </a>
                                                </li>
                                                ";
                                            }
                                            else{}
                                        }
                                        else{}
                                    ?>

                                <li>
                                    <a href="#" class="nav-bar">
                                        <i class="feather icon-user"></i> Profile
                                    </a>
                                </li>
                           
                                <li>
                                    <?php 
                                        if (isset($_SESSION['name_account']) && isset($_SESSION['id_user'])) {
                                            echo "<a href='/client/logout'  class='nav-bar'>
                                            <i class='feather icon-log-out'></i> Logout
                                        </a>";
                                        }
                                        else{
                                            echo "<a href='/client/login'  class='nav-bar'>
                                            <i class='feather icon-log-in'></i> Login
                                        </a>";
                                        }
                                    ?>
                                </li>
                            </ul>
                        </div>
                    </li>
                </div>
            <script>
                function list_menu() {
                    const dropdownMenu = document.querySelector(".dropdown-menu");
                    const display = dropdownMenu.style.display;
                    if (display == "block") {
                        document.querySelector(".dropdown-menu").style.display = "none";
                    }
                    else{
                        document.querySelector(".dropdown-menu").style.display = "block";
                    }
                }
            </script>
            </div>
        </div>
    </header>
</div>