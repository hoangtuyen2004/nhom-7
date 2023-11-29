<?php
    if (!isset($_SESSION['name_account']) && !isset($_SESSION['id_user'])) {
        header('location: /client/login');
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include_once '/laragon/www/nhom_7/src/Views/client/components/head.php';?>
    <?php include_once '/laragon/www/nhom_7/asset-client/css/css.php';?>
    <?php include_once '/laragon/www/nhom_7/src/Views/client/components/style.php';?>
    <?php include_once '/laragon/www/nhom_7/src/Views/client/user/style.php';?>
    <title>Food news | Nhóm 7</title>
</head>

<body>

    <!-- Header -->
    <?php include_once '/laragon/www/nhom_7/src/Views/client/components/header.php';?>
    <!-- Menu-main -->
    <?php include_once '/laragon/www/nhom_7/src/Views/client/components/nav-main.php';?>
    <!-- Content -->
    <div id="td-outer-wrap" class="td-theme-wrap" style="background-color: white;">
        <div class="td-main-content-wrap td-main-page-wrap td-container-wrap">
            <div class="tdc-content-wrap">

                <!-- SECTION -->
                <section class="container">
                    <div class="section">
                        <div class="user">
                            <div class="img-user">
                                <img src="/img_file/<?=$user['img']?>" alt="Ảnh người dùng">
                            </div>
                            <div class="account">
                                <h3><?=$user['name']?></h3>
                                <p><?=$user['name_account']?></p>
                            </div>
                            <div class="action-user">
                                <div class="action">
                                    <a href="#">Thông tin tài khoản</a>
                                    <a href="#">Thông báo</a>
                                    <a href="#">Yêu thích</a>
                                    <a href="#">Bài viết</a>
                                    <a href="#">Đăng xuất</a>
                                </div>
                            </div>
                        </div>
                        <div class="list-action-user">
                            <div class="box-action">
                                <?php require_once $view . '.php'; ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <!-- Foodter -->
    <?php include_once '/laragon/www/nhom_7/src/Views/client/components/footer.php';?>
</body>

</html>