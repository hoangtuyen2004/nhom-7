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
                                        <a href="/client/writer/writing" style="color: #ffffff;" class="btn waves-effect waves-light btn-primary btn-square"><i class="fa-solid fa-plus fa-lg" style="color: #ffffff;"></i> Viết bài mới</a>
                                    </div>
                                </div>
                                <div class="card-block p-b-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0">
                                            <thead>
                                                <tr>
                                                    <th>Mã bài viết</th>
                                                    <th>Tiêu đề</th>
                                                    <th>Lượt xem</th>
                                                    <th>Trạng thái</th>
                                                    <th>Chức năng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($writing as $writing) :?>
                                                    <?php foreach ($news as $new) :?>
                                                <tr>
                                                        <?php if ($writing['id_user']==$_SESSION['id_user'] && $writing['id_news']==$new['id']) {
                                                            echo "<td>";
                                                            echo $new['id'];
                                                            echo "</td>";
                                                        }?>
                                                    <?php if ($writing['id_user']==$_SESSION['id_user'] && $writing['id_news']==$new['id']) {
                                                            echo "<td>";
                                                            echo $new['title'];
                                                            echo "</td>";
                                                        }?>
                                                        <?php if ($writing['id_user']==$_SESSION['id_user'] && $writing['id_news']==$new['id']) {
                                                            echo "<td>";
                                                            echo $new['views'];
                                                            echo "</td>";
                                                        }?>
                                                        <?php
                                                            if ($writing['id_user']==$_SESSION['id_user'] && $writing['id_news']==$new['id']) {
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
                                                        ?>
                                                        
                                                    <?php if ($writing['id_user']==$_SESSION['id_user'] && $writing['id_news']==$new['id']) {
                                                        echo "<td style='width: 10%;'>";
                                                        echo "<a href='/client/writing/list?id=$new[id]' style='color:#ffffff;' class='btn waves-effect waves-light btn-success btn-square'><i class='fa-regular fa-eye' style='color: #ffffff;'></i> Xem ngay</a>";
                                                        echo "<a href='/client/writing/update?id=$new[id]' style='color:#ffffff;' class='btn waves-effect waves-light btn-warning btn-square'><i class='fa-solid fa-square-pen' style='color: #ffffff;'></i> Chỉnh sửa</a>";
                                                        echo "<a href='/client/writing/delete?id=$new[id]' onclick='return confirm('bạn chắc chắn')' style='color:#ffffff;' class='btn waves-effect waves-light btn-danger btn-square'><i class='fa-solid fa-trash' style='color: #ffffff;'></i> Xóa</a>";
                                                        echo "</td>";
                                                    }?>
                                                    
                                                </tr>
                                                        <?php endforeach?>
                                                    <?php endforeach?>
                                                    <form action="/admin/categories/delete?id=<?= $category['id'] ?>" method="post">
                                                                <a type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm mt-2">Xóa</a>
                                                            </form>
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