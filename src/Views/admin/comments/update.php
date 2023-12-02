<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Comment UPdate</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Chỉnh sửa comment</h1>
        <form action="" method="post">
            <label for="name">Comment</label>
            <input type="text" name="comment" class="form-control" value="<?= $comments['comment'] ?>" placeholder="Chỉnh sửa comment" required>
            <input type="text" name="id_user" id="" value="<?=$comments['id_user']?>" hidden>
            <input type="text" name="id_news" id="" value="<?=$comments['id_news']?>" hidden>
            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
            <a href="/admin/comments" class="btn btn-primary mt-3">Quay lại d/s</a>
        </form>
    </div>
</body>

</html>