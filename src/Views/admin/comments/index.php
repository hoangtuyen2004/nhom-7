<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Comment</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Comment</a> </li>
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
                                    <h5>Danh sách Comment</h5>

                                    <a href="/admin/news/create" class="btn btn-info btn-sm">Tạo mới</a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Bài viết</th>
                                                    <th>Số lượng comment</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($news as $new) : ?>
                                                    <tr>
                                                        <td><?= $new['title'] ?></td>

                                                        <td>
                                                            <?php
                                                            // Kiểm tra xem $comment đã được đặt (nếu có thông tin về bình luận)
                                                            if (isset($comment)) {
                                                                // Khởi tạo biến đếm số lượng bình luận
                                                                $commentCount = 0;

                                                                // Lặp qua mỗi $comment (thông tin về bình luận)
                                                                foreach ($comment as $commen) {
                                                                    // Kiểm tra xem bình luận có khớp với ID của tin tức hiện tại không
                                                                    if ($commen['id_news'] == $new['id']) {
                                                                        // Nếu có khớp, tăng biến đếm
                                                                        $commentCount++;
                                                                    }
                                                                }

                                                                // Hiển thị số lượng bình luận trong ô
                                                                echo $commentCount;
                                                            }
                                                            ?>
                                                    </td>
                                                    <td>
                                                        <a href="/admin/comments/ctComment?id=<?= $new['id'] ?>" class="btn btn-warning btn-sm">Chi Tiết</a>
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