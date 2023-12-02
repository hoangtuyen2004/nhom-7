<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once '/laragon/www/nhom_7/src/Views/client/components/head.php';?>
    <?php include_once '/laragon/www/nhom_7/asset-client/css/css.php';?>
    <?php include_once '/laragon/www/nhom_7/src/Views/client/components/style.php';?>
    <title>Food news | <?=$news['title']?></title>
</head>
<body>
    <!-- Header -->
    <?php include_once '/laragon/www/nhom_7/src/Views/client/components/header.php';?>
    <!-- Menu-main -->
    <?php include_once '/laragon/www/nhom_7/src/Views/client/components/nav-main.php';?>
    <!-- Content -->
    <?php include_once '/laragon/www/nhom_7/src/Views/client/list/content.php';?>
    <!-- Foodter -->
    <?php include_once '/laragon/www/nhom_7/src/Views/client/components/footer.php';?>
</body>
</html>