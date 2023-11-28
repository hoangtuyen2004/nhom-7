<style>
    <?php include_once '/laragon/www/nhom_7/asset-client/display/componient/head.php';?>
</style>
<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>News-see more</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">News</a> </li>
                        <li class="breadcrumb-item"><a href="#!">see more</a> </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="col-md-12">
            <div class="card table-card">
                <div class="card-header">
                    <h5>Mã hiển thị: <?= $news['id_display']?></h5>
                    <div class="card-header-right">
                        <ul class="list-unstyled card-option">
                            <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i>
                            </li>
                            <li><i class="feather icon-maximize full-card"></i></li>
                            <li><i class="feather icon-minus minimize-card"></i>
                            </li>
                            <li><i class="feather icon-refresh-cw reload-card"></i>
                            </li>
                            <li><i class="feather icon-trash close-card"></i></li>
                            <li><i class="feather icon-chevron-left open-card-option"></i>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-block p-b-0">
                    <div class="table-responsive" style="padding: 20px;">

                    <?php 
                        $display = $_GET['id_display'];
                        if ($display == 1) {
                            include_once '/laragon/www/nhom_7/src/Views/admin/news/display/display1.php';
                        }
                        elseif ($display == 2) {
                            include_once '/laragon/www/nhom_7/src/Views/admin/news/display/display2.php';
                        }
                        elseif ($display == 3) {
                            include_once '/laragon/www/nhom_7/src/Views/admin/news/display/display3.php';
                        }
                        else{
                                echo "Dữ liệu lỗi ERR 404";
                        }
                    ?>

                    </div>
                </div>
            </div>
        </div>
    </div>


</div>