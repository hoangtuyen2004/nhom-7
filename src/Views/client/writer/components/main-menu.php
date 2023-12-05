<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">Người viết: <?=$_SESSION['name_account']?></div>
            <ul class="pcoded-item pcoded-left-item">
                <li class>
                    <a href="/client/writer" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa-solid fa-chart-simple"></i>
                        </span>
                        <span class="pcoded-mtext">Quản lý</span>
                    </a>
                </li>

                <li class>
                    <a href="/client/writer/news" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa-regular fa-newspaper"></i>
                        </span>
                        <span class="pcoded-mtext">Bài đăng</span>
                    </a>
                </li>

                <li class>
                    <a href="/client/writer/comment" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                        <i class="fa-solid fa-comment"></i>
                        </span>
                        <span class="pcoded-mtext">Bình luận</span>
                    </a>
                </li>

                <li class>
                    <a href="#" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa-solid fa-bell"></i>
                            
                        </span>
                        <span class="pcoded-mtext" style="position: initial;">Thông báo</span>
                        <span class="badge bg-c-red">
                                                <?php 
                                                    if (isset($_SESSION['notify'])) {
                                                        echo $_SESSION['notify'];
                                                    }
                                                    else{
                                                        echo 0;
                                                    }
                                                ?>
                                            </span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</nav>