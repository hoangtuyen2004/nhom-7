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
                        <li class="breadcrumb-item"><a href=""></a>Bình luận</li>
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
                                    <h5>Bài viết</h5>
                                    <div class="card-header-right">
                                        <a href="/client/writer/news" class="btn waves-effect waves-dark btn-info btn-outline-info">
                                            <i class="fa fa-usb fa-lg"></i> Bài viết
                                        </a>
                                    </div>
                                </div>
                                <div class>
                                    <div class="col-md-12">
                                        <div class="card-header">
                                        </div>
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <table class="table table-hover m-b-0 without-header">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Bài viết</th>
                                                            <th>Bình luận</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php use Ductong\BaseMvc\Models\Comment; foreach ($writing as $write) :?>
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
                                                            <td class="text-right" style="width: 10%;">
                                                                <form action="/client/writer/comment/list" method="post">
                                                                    <input type="text" name="id_news" value="<?=$write['id_news']?>" readonly hidden>
                                                                    <button class="btn btn-warning btn-round waves-effect waves-light" type="submit">
                                                                        Bình luận: <?php 
                                                                            $conditions = [
                                                                                ['id_news', '=', $write['id_news']]
                                                                            ];
                                                                            $comment = (new Comment)->findColumns($conditions);
                                                                            echo count($comment);
                                                                        ?> : <i class="fa fa-twitch fa-xl"></i>
                                                                    </button>
                                                                </form>
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
</div>