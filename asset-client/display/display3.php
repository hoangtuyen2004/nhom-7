<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food news | Chi tiết news</title>
    <?php 
        include_once './componient/head.php';
        include_once '../css/css.php';
    ?>
    
</head>
<body>
<body class="post-template-default single single-post postid-12641 single-format-standard wp-schema-pro-2.1.1 cach-nau-che-hat-ke global-block-template-1 td-full-layout">

    <div id="td-outer-wrap" class="td-theme-wrap">
        <div class="td-header-wrap td-header-style-10 ">

            <!-- Header -->
                <?php include_once './componient/header.php'?>

            <!-- Menu-main -->
                <?php include_once './componient/nav-main.php';?>

        </div>
        <div class="td-main-content-wrap td-container-wrap">
            <div class="td-container td-post-template-default ">

                <!-- nav-mini -->
                <div class="td-crumb-container">
                    <div class="entry-crumbs">
                        <span>
                            <a title="" class="entry-crumb" href="https://amthucbonmua.vn/">Trang chủ</a>
                        </span>
                        <i class="td-icon-right td-bread-sep"></i>
                        <span>
                            <a class="entry-crumb" href="https://amthucbonmua.vn/am-thuc/mon-an-gia-dinh">Món Ăn Gia
                                Đình</a>
                        </span>
                        <i class="td-icon-right td-bread-sep"></i>
                        <span>
                            <a class="entry-crumb" href="https://amthucbonmua.vn/am-thuc/mon-an-gia-dinh/diem-tam">Điểm
                                Tâm</a>
                        </span>
                        <i class="td-icon-right td-bread-sep td-bred-no-url-last"></i>
                        <span class="td-bred-no-url-last">Hướng dẫn 3 cách nấu chè hạt kê thơm ngon chiêu đãi...</span>
                    </div>
                </div>

                <div class="td-pb-row">

                    <!-- Section-article -->
                        <?php include_once './conten/section2.php';?>

                    <!-- Asile -->
                        <?php include_once './conten/asile.php';?>

                </div>
            </div>
        </div>

        <!-- Footer -->
            <?php include_once './componient/footer.php';?>

    </div>
</body>

</body>
</html>