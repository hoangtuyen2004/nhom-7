<?php foreach ($comment as $c) : ?>
    <?php
    // Lấy thông tin về người viết
    $writerName = '';  // Biến để lưu tên người viết

    // Lặp qua danh sách người viết
    foreach ($writing as $write) {
        // Kiểm tra xem bình luận thuộc về người viết nào và thuộc về bài viết hiện tại
        if ($write['id_news'] == $news['id'] && $write['id_user'] == $c['id_user']) {
            foreach ($users as $user) {
                // Lấy tên người viết
                if ($write['id_user'] == $user['id']) {
                    $writerName = $user['name_account'];
                    break;
                }
            }
        }
    }
    ?>

    <div class="comment">
        <p><strong><?= $writerName ?></strong>: <?= $c['comment'] ?></p>
    </div>
<?php endforeach ?>

<?php
// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['id_user'])) {
    echo "<p style='color: red;'>Bạn cần đăng nhập để bình luận</p>";
} else {
    // Nếu đã đăng nhập, hiển thị form bình luận
    ?>
    <form action="/client/list/ccomment" method="post">
        <input type="hidden" name="id_news" value="<?= $news['id'] ?>">
        <!-- <input type="hidden" name="id_users" value="<?= $users['id'] ?>"> -->

        <label for="comment-content">Nội dung:</label>
        <textarea name="comment" style="width: 100%;" rows="4" required></textarea>

        <input type="submit" name="btn_submit" value="Gửi bình luận">
    </form>
<?php
}
?>
<br>
