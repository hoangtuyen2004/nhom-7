<nav class="pcoded-navbar">
    <div class="nav-list">
        <div class="pcoded-inner-navbar main-menu">
            <div class="pcoded-navigation-label">App</div>
            <ul class="pcoded-item pcoded-left-item">
                <li class>
                    <a href="/admin/dashboard" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa feather icon-home"></i>
                        </span>
                        <span class="pcoded-mtext">Dashboard</span>
                    </a>
                </li>

                <li class>
                    <a href="/admin/users" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa feather icon-clipboard"></i>
                        </span>
                        <span class="pcoded-mtext">Quản lý users</span>
                    </a>
                </li>

                <li class>
                    <a href="/admin/categories" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                            <i class="fa feather icon-layers"></i>
                        </span>
                        <span class="pcoded-mtext">Quản lý Danh mục</span>
                    </a>
                </li>
                <li class>
                    <a href="/admin/news" class="waves-effect waves-dark">
                        <span class="pcoded-micon">
                        <i class="fa fa-cloud"></i>
                        </span>
                        <span class="pcoded-mtext">Quản lý bài đăng</span>
                    </a>
                </li>

                <li class>
                <a href="/admin/comments" class="waves-effect waves-dark">
                                            <span class="pcoded-micon">
                                            <i class="fa fa-comment"></i>
                                            </span>
                                            <span class="pcoded-mtext">Comment</span>
                                        </a>
                </li>
                <li class>
                <a href="/admin/commit" class="waves-effect waves-dark">
                                            <span class="pcoded-micon">
                                            <i class="fa feather icon-inbox"></i>
                                            </span>
                                            <span class="pcoded-mtext" style="position: initial;">Kiểm duyệt bài viết</span>
                                            <span class="badge bg-c-red">
                                                <?php 
                                                    if (isset($_SESSION['commit'])) {
                                                        echo $_SESSION['commit'];
                                                    }
                                                    else{
                                                        echo 0;
                                                    }
                                                ?>
                                            </span>  <!--- Thông báo --->
                                        </a>
                </li>

            </ul>
        </div>
    </div>
</nav>