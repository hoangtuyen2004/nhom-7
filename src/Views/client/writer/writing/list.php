<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Xem bài viết</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/client/writer/news"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href=""></a> Xem bài viết </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>Mã bài viết: <?=$_GET['id']?></h5>
                                    <div class="card-header-right">
                                        <a href="/client/writer/news" class="btn btn-info waves-effect waves-light btn-square">
                                            <i class='fa fa-caret-square-o-left' style='color: #ffffff;'></i> Quay lại
                                        </a>
                                        <a href="/client/writing/update?id=<?=$news['id']?>" class="btn waves-effect waves-light btn-warning btn-square">
                                            <i class='fa fa-calendar-minus-o' style='color: #ffffff;'></i> Sửa bài
                                        </a>
                                        <a href="/client/writing/delete?id=<?=$news['id']?>" onclick="return confirm('Bạn có chắc muốn xóa!')" class="btn waves-effect waves-light btn-danger btn-square">
                                            <i class='fa fa-calendar-times-o' style='color: #ffffff;'></i> Xóa bài
                                        </a>
                                    </div>
                                </div>
                                <!-- CONTENT -->
                                <div id="td-outer-wrap" class="td-theme-wrap">
                                    <div class="td-main-content-wrap td-main-page-wrap td-container-wrap"
                                        style="padding: 20px;">
                                        <div class="tdc-content-wrap">

                                            <!-- content -->
                                            <div class="vc_row td_uid_7_655dbc192232f_rand td-ss-row wpb_row td-pb-row">
                                                <!-- Section   -->

                                                <div
                                                    class="vc_column td_uid_8_655dbc1922458_rand  wpb_column vc_column_container tdc-column td-pb-span8">
                                                    <?php 
                                                            if ($news['id_display']==1) {
                                                                include_once 'display/display1.php';
                                                            }
                                                            elseif ($news['id_display']==2) {
                                                                include_once 'display/display2.php';
                                                            }
                                                            else {
                                                                include_once 'display/display3.php';
                                                            }
                                                        ?>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <!-- Asile    -->
                                                <div
                                                    class="vc_column td_uid_29_655dbc193a095_rand  wpb_column vc_column_container tdc-column td-pb-span4">
                                                    <?php include_once '/laragon/www/nhom_7/src/Views/client/components/asile.php';?>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <div class="col-md-12">
                                <div class="card table-card">
                                    <div class="card-header">
                                        <h5>Bình luận của bài viết</h5>
                                        <div class="card-header-right">
                                            <ul class="list-unstyled card-option">
                                                <li style="margin: 0px;">
                                                    <i class="feather icon-refresh-cw reload-card"></i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="card-block">
                                        <div class="table-responsive">
                                            <table class="table table-hover m-b-0">
                                                <thead>
                                                    <tr>
                                                        <th>Bình luận</th>
                                                        <th>Trạng thái</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($comments as $comment) :?>
                                                    <tr>
                                                        <td>
                                                            <div class="d-inline-block align-middle">
                                                                <img style="width:50px;height:50px;object-fit:cover;" src="/img_file/<?php foreach ($users as $user) {if ($comment['id_user']==$user['id']) {echo $user['img'];}}?>" alt="user image" class="img-radius img-40 align-top m-r-15">
                                                                <div class="d-inline-block">
                                                                    <h6><?php foreach ($users as $user) {if ($comment['id_user']==$user['id']) {echo $user['name'];}}?></h6>
                                                                    <p class="text-muted m-b-0"><?=$comment['comment']?></p>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <?php 
                                                                if ($comment['id_status']==2) {
                                                                    echo "<label class='badge badge-inverse-primary'>Hiển thị</label>";
                                                                }
                                                                else {
                                                                    echo "<label class='badge badge-inverse-danger'>Không hiển thị</label>";
                                                                }
                                                            ?>
                                                        </td>
                                                        <td style="width: 10px;">
                                                            <a href="/client/writer/comment/Unlist?id=<?=$comment['id']?>" class="btn waves-effect waves-light btn-warning btn-square mr-3"><i class="fa fa-bookmark icon-trash-2 f-w-600 f-16 text-c-red"></i> Ẩn comment</a>
                                                            <a href="#!" class="btn waves-effect waves-light btn-danger btn-square"><i class="fa fa-bullseye icon-trash-2 f-w-600 f-16 text-c-blue"></i> Báo cáo</a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>