<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>News</h5>
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
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Danh sách bài tin</h5>

                                    <a href="/admin/news/create" class="btn btn-info btn-sm">Tạo mới</a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Img</th>
                                                    <th>Tetle</th>
                                                    <th>Uploader</th>
                                                    <th>Category</th>
                                                    <th>Status</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                    <?php foreach ($news as $new) :?>
                                                    <tr>
                                                        <td style="width: 10%;"><img class="img-fluid width-100" src="/img_file/<?= $new['avatar']?>" alt=""></td>
                                                        <td><?= $new['title']?></td>
                                                        <td><a href="" class="__cf_email__"><!--Tạo liên kết đến người dùng-->
                                                            <?php 
                                                                $name = "";
                                                                foreach ($users as $user) {
                                                                    foreach ($writing as $write) {
                                                                        if ($new['id']==$write['id_news'] && $write['id_user']==$user['id']) {
                                                                            $name = $user['name'];
                                                                        }
                                                                    }
                                                                }
                                                                if ($name == "") {
                                                                    $name = "Admin";
                                                                }
                                                                    echo $name;
                                                            ?>
                                                        </a></td>
                                                        <td>
                                                            <?php 
                                                                foreach ($categorys as $category) {
                                                                    if ($new['id_category']==$category['id']) {
                                                                        echo $category['name'];
                                                                    }
                                                                }
                                                            ?>
                                                        </td>
                                                        <td>
                                                            <label <?php if($new['id_status']==1){echo "class='label label-primary'";}else if($new['id_status']==2){echo "class='label label-success'";}else{echo "class='label label-danger'";}?>>
                                                                <?php 
                                                                    foreach ($status as $statu) {
                                                                        if ($new['id_status']==$statu['id']) {
                                                                            echo $statu['name'];
                                                                        }
                                                                    }
                                                                ?>
                                                            </label>
                                                        </td>
                                                        <td>
                                                            <a href="/admin/news/more?id=<?= $new['id']?> && id_display=<?= $new['id_display']?>" class="btn btn-warning btn-sm">Chi Tiết</a>
                                                            <form action="/admin/news/delete?id=<?= $new['id'] ?>" method="post">
                                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa bài viết này?');" class="btn btn-danger btn-sm mt-2">Xóa</button>
                                                            </form>
                                                            <a href="/admin/news/update?id=<?= $new['id']?>" class="btn btn-primary btn-sm mt-2">Cập Nhật</a>
                                                        </td>
                                                    </tr>
                                                    <?php endforeach ?>
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
