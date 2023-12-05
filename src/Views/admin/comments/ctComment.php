<div class="pcoded-content">
    <!-- ... (phần mã HTML khác không thay đổi) ... -->
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Danh Sách Bình Luận</h5>
                                    <a href="/admin/news/create" class="btn btn-info btn-sm">Tạo mới</a>
                                </div>
                                <div class="card-block">
                                    <?php
                                    $newsId = $_GET['id'];
                                    $commentsId = array();

                                    // Tổng hợp bình luận cho ID tin tức cụ thể
                                    if (isset($comment)) {
                                        foreach ($comment as $commen) {
                                            if ($commen['id_news'] == $newsId) {
                                                $commentsId[] = $commen;
                                            }
                                        }
                                    }

                                    // Hiển thị bình luận trong một bảng duy nhất
                                    if (!empty($commentsId)) {
                                        echo '<table id="simpletable" class="table table-striped table-bordered nowrap">';
                                        echo '<thead><tr><th>Người viết</th><th>Chi tiết bình luận của bài viết</th><th>Status</th><th>Action</th></tr></thead>';
                                        echo '<tbody>';

                                        foreach ($commentsId as $comment) {
                                            echo '<tr>';
                                            // Lấy thông tin về người viết
                                            $writerName = '';  // Biến để lưu tên người viết

                                            // Lặp qua danh sách người viết
                                            foreach ($writing as $write) {
                                                // Kiểm tra xem bình luận thuộc về người viết nào
                                                if ($write['id_news'] == $comment['id_news'] && $write['id_user'] == $comment['id_user']) {
                                                    foreach ($users as $user) {
                                                        // Lấy tên người viết
                                                        if ($write['id_user'] == $user['id']) {
                                                            $writerName = $user['name_account'];
                                                            break;
                                                        }
                                                    }
                                                }
                                            }
                                            echo '<td>' . $writerName . '</td>';
                                            echo '<td>' . $comment['comment'] . '</td>';

                                            // Lấy tên trạng thái từ $status 
                                            $statusName = '';
                                            foreach ($status as $sta) {
                                                if ($sta['id'] == $comment['id_status']) {
                                                    $statusName = $sta['name'];
                                                }
                                            }
                                            echo '<td>' . $statusName . '</td>';

                                            echo '<td>';
                                            echo '<form action="/admin/comments/delete?id=' . $comment['id'] . '" method="post">';
                                            echo '<button type="submit" onclick="return confirm(\'Bạn có chắc chắn xóa?\');" class="btn btn-danger btn-sm mt-2">Xóa</button>';
                                            echo '</form>';

                                            // Nút Cập nhật
                                            echo '<a href="/admin/comments/update?id=' . $comment['id'] . '" class="btn btn-primary btn-sm mt-2">Cập nhật</a><br>';

                                            // Nút Blocked hoặc Unblocked
                                            echo '<a href="/admin/comments/' . ($comment['id_status'] != 3 ? 'unlist' : 'list') . '?id=' . $comment['id'] . '" class="btn bg-warning btn-sm mt-2">';
                                            echo $comment['id_status'] != 3 ? 'List' : 'Unlist';
                                            echo '</a>';

                                            echo '</td>';
                                            echo '</tr>';
                                        }

                                        echo '</tbody></table>';
                                    } else {
                                        echo '<p>Không tìm thấy bình luận cho bài viết này.</p>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>