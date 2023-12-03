<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a href="/client/writer">
                <img class="img-fluid" src="/asset-client/Image/Writer_preview_rev_1.png" alt="Theme-Logo" />
            </a>
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu icon-toggle-right"></i>
            </a>
            <a class="mobile-options waves-effect waves-light">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li>
                    <a href="/" class="waves-effect waves-light">
                        <i class="fa-solid fa-earth-americas fa-xl"></i>
                    </a>
                </li>
                <li>
                    <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                        <i class="full-screen feather icon-maximize"></i>
                    </a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <img style="height: 40px;width: 40px;object-fit: cover;" src="/img_file/<?=$writer['img']?>" class="img-radius" alt="User-Profile-Image">
                            <span><?php if(isset($_SESSION['name_account'])){echo $_SESSION['name_account'];}else{echo "ADMIN";}?></span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>