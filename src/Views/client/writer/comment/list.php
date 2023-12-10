<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Quản lý bình luận</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/client/writer/news"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href=""></a>Bài viết</li>
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
                                    <h5>Bài viết: <?=$news['id']?></h5>
                                    <div class="card-header-right">
                                        <a href="/client/writer/comment"
                                            class="btn waves-effect waves-light btn-google-plus">
                                            <i class="fa fa-times-circle fa-lg" style="color: #ffff;"></i> Quay lại
                                        </a>
                                    </div>
                                </div>
                                <div class>
                                    <div class="col-xl-12 col-md-12">
                                        <div class="table-card">
                                            <div class="card-block">
                                                <div class="table-responsive">
                                                    <table class="table table-hover m-b-0 without-header">
                                                        <tbody>
                                                            <thead>
                                                                <tr>
                                                                    <th>Bình Luận</th>
                                                                    <th>Trạng Thái</th>
                                                                    <th>Hành Động</th>
                                                                </tr>
                                                            </thead>
                                                        <tbody>
                                                            <?php foreach ($comment as $note) :?>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-inline-block align-middle">
                                                                        <img style="width: 50px;height: 50px; object-fit: cover;"
                                                                            src="/img_file/<?php foreach ($user as $ne) {if($note['id_user']==$ne['id']){echo $ne['img'];}}?>"
                                                                            alt="user image"
                                                                            class="img-radius img-40 align-top m-r-15">
                                                                        <div class="d-inline-block">
                                                                            <h6><?php foreach ($user as $ne) {if($note['id_user']==$ne['id']){echo $ne['name'];}}?>
                                                                            </h6>
                                                                            <p class="text-muted m-b-0">
                                                                                <?=$note['comment']?></p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td style="width: 10px;">
                                                                    <?php 
                                                                    if ($note['id_status']==2) {
                                                                        echo "<label class='badge badge-inverse-primary'>Hiển thị</label>";
                                                                    }
                                                                    else{
                                                                        echo "<label class='badge badge-inverse-danger'>Không hiển thị</label>";
                                                                    }
                                                                    ?>
                                                                </td>
                                                                <td style="width: 10px;">
                                                                
                                                                    <a href="<?php if($note['id_status']==2){echo '/client/writer/comment/Unlist';}else{echo '/client/writer/comment/see';}?>?id=<?=$note['id']?>" 
                                                                    style="color: #ffff;" 
                                                                    class="<?php if($note['id_status']==2){echo 'btn btn-danger waves-effect waves-light';}else{echo 'btn btn-primary waves-effect waves-light';}?>" 
                                                                    type="submit"><i class="<?php if($note['id_status']==2){echo 'fa-solid fa-eye-slash';}else{echo 'fa-solid fa-eye';}?>" style="color: #ffffff;"></i> <?php if($note['id_status']==2){echo 'Ẩn';}else{echo 'Hiện';}?></a>
                                                                    <a href="#" style="color: #ffff;" class="btn waves-effect waves-light btn-warning"><i class="fa-solid fa-circle-exclamation" style="color: #ffffff;"></i> Báo Cáo</a>
                                                                </td>
                                                            </tr>
                                                            <?php if($note['id_status']==2) {
                                                                echo "";
                                                            } 
                                                            ?>
                                                            <?php endforeach?>
                                                        </tbody>
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
    </div>
</div>