<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Bài đăng</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/client/writer/news"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href=""></a> bài đăng</li>
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
                                    <h5>New Products</h5>
                                    <div class="card-header-right">
                                        <a href="/client/writer/writing" style="color: #ffffff;"
                                            class="btn waves-effect waves-light btn-primary btn-square"><i
                                                class="fa-solid fa-plus fa-lg" style="color: #ffffff;"></i> Viết bài
                                            mới</a>
                                    </div>
                                </div>
                                <div class="card-block p-b-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0">
                                            <thead>
                                                <tr>
                                                    <th>Mã bài viết</th>
                                                    <th>Tiêu đề</th>
                                                    <th>Thống kê</th>
                                                    <th>Trạng thái</th>
                                                    <th>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php use Ductong\BaseMvc\Models\Favorite; foreach ($writing as $write) :?>
                                                <tr>
                                                    <td style="width: 10px;">
                                                        <?=$write['id_news']?>
                                                    </td>
                                                    <td>
                                                                <div class="d-inline-block align-middle">
                                                                    <img style="width: 100px;height: 70px;object-fit: cover;" src="/img_file/<?php foreach ($news as $new) {if ($write['id_news']==$new['id']){echo $new['avatar']; }}?>"
                                                                        alt="user image"
                                                                        class="align-top m-r-15">
                                                                    <div class="d-inline-block">
                                                                        <h4 title="Title">
                                                                            <?php foreach ($news as $new) {if ($write['id_news']==$new['id']) {
                                                                                    echo $new['title'];
                                                                                }}?>
                                                                        </h4>
                                                                        <p title="Subtitle" class="td-post-category" style="width: 200px;">
                                                                            <?php foreach ($news as $new) {if ($write['id_news']==$new['id']) {
                                                                                    foreach ($categorys as $category) {
                                                                                        if ($new['id_category']==$category['id']) {
                                                                                            echo $category['name'];
                                                                                        }
                                                                                    }
                                                                                }}?>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                    <td>
                                                        <?php foreach ($news as $new) {
                                                            if($new['id']==$write['id_news']){
                                                                echo "<label class='label label-warning'>";
                                                                echo "Views:  " .$new['views'] ." <i class='fa-solid fa-eye' style='color: #ffffff;'></i>";
                                                                echo "</label>";
                                                                $conditions = [
                                                                    ['id_news', '=', $new['id']]
                                                                ];
                                                                $like = (new Favorite)->findColumns($conditions);
                                                                $countLike = count($like);
                                                                if (isset($countLike)) {
                                                                    echo "<label class='label label-primary'>";
                                                                    echo "Like:  " .$countLike ." <i class='fa-solid fa-heart' style='color: #ffffff;'></i>";
                                                                    echo "</label>";
                                                                }
                                                            }
                                                        }?>
                                                        
                                                    </td>
                                                    <?php foreach ($news as $new) {
                                                            if ($write['id_user']==$_SESSION['id_user'] && $write['id_news']==$new['id']) {
                                                                    foreach ($status as $statu) {
                                                                        if ($new['id_status']==$statu['id']) {
                                                                            echo "<td>";
                                                                            if ($statu['id']==1) {
                                                                                echo "<label class='label label-primary'>";
                                                                            }
                                                                            elseif ($statu['id']==2) {
                                                                                echo "<label class='label label-success'>";
                                                                            }
                                                                            else {
                                                                                echo "<label class='label label-danger'>";
                                                                            }
                                                                            echo $statu['name'];
                                                                            echo"</label>";
                                                                            echo "</td>";
                                                                        }
                                                                    }
                                                                }
                                                            }
                                                        ?>
                                                    <td style="width: 10%;">
                                                        <a href="/client/writing/list?id=<?=$write['id_news']?>"
                                                            style="color:#ffffff;"
                                                            class="btn waves-effect waves-light btn-success btn-square"><i
                                                                class="fa-regular fa-eye" style="color: #ffffff;"></i>
                                                            Xem ngay</a>
                                                        <a href="/client/writing/update?id=<?=$write['id_news']?>"
                                                            style="color:#ffffff;"
                                                            class="btn waves-effect waves-light btn-warning btn-square"><i
                                                                class="fa-solid fa-square-pen"
                                                                style="color: #ffffff;"></i> Chỉnh sửa</a>
                                                        <a href="/client/writing/delete?id=<?=$write['id_news']?>"
                                                            onclick="return confirm('Bạn có chắc muốn xóa bài viết này')"
                                                            style="color:#ffffff;"
                                                            class="btn waves-effect waves-light btn-danger btn-square"><i
                                                                class="fa-solid fa-trash" style="color: #ffffff;"></i>
                                                            Xóa</a>
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