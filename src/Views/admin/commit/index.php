<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Commit</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Commit</a> </li>
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
                                    <h5>Danh sách yêu cầu duyệt</h5>

                                    <a href="/admin/categories/create" class="btn btn-info btn-sm">Đã duyệt</a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <div class="col-xs-12 col-sm-12">
                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Người viết</th>
                                                        <th>Mã bài viết</th>
                                                        <th>Commit</th>
                                                        <th>Status</th>
                                                        <th>Reply</th>
                                                        <th>Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php foreach ($newU as $new) : ?>
                                                    <tr>
                                                        <td>
                                                            <?php foreach ($commits as $commit){
                                                            foreach ($users as $user) {
                                                                if ($user['id']==$commit['id_user'] && $commit['id_news']==$new['id']) {
                                                                    echo $user['name_account'];
                                                                }
                                                            }}?>
                                                        </td>
                                                        <td>
                                                            <?php foreach ($commits as $commit){
                                                                if ($new['id']==$commit['id_news']) {
                                                                    echo "<a href='/admin/news/more?id=" .$new['id']. "&& id_display=".$new['id_display']."'>".$new['id']."</a>";
                                                                }
                                                            }?>
                                                        </td>
                                                        <td><?php foreach ($commits as $commit){
                                                            if ($commit['id_news']==$new['id']) {
                                                                echo $commit['commit'];
                                                            }
                                                        }?></td>
                                                        <td>
                                                            <?php foreach ($commits as $commit){
                                                                if ($new['id']==$commit['id_news']) {
                                                                    if ($new['id_status']==1) {
                                                                        echo "<label class='label label-primary'>Chưa được duyệt</label>";
                                                                    }
                                                                    elseif ($new['id_status']==2) {
                                                                        echo "<label class='label label-success'>Được hiển thị</label>";
                                                                    }
                                                                    else{
                                                                        echo "<label class='label label-danger'>Không được hiển thị</label>";
                                                                    }
                                                                }
                                                            }?>
                                                        </td>
                                                        <td>
                                                            <?php foreach ($commits as $commit){
                                                                if ($commit['id_news']==$new['id']) {
                                                                if ($commit['reply']=="") {
                                                                    echo "Bài viết chưa được kiểm duyệt hãy";
                                                                    echo "</br>";
                                                                    echo "<a href='/admin/commit/update?id=" .$commit['id']."' style='color:blue;text-decoration:underline;'>Phản hồi</a>";
                                                                }
                                                                else{
                                                                    echo $commit['reply'];
                                                                }
                                                            }}?>
                                                        </td>
                                                        <td>
                                                            <a href="/admin/commit/list?id=<?=$commit['id']?>"
                                                                class="btn btn-primary btn-sm">Duyệt nhanh</a>
                                                            <form action="/admin/commit/unlist?id=<?=$commit['id']?>"
                                                                method="post">
                                                                <button type="submit"
                                                                    onclick="return confirm('Bạn có chắc chắn không duyệt cho bài viết này');"
                                                                    class="btn btn-danger btn-sm mt-2">Không kiểm
                                                                    duyệt</button><br>
                                                            <a href="/admin/commit/update?id=<?=$commit['id']?>"
                                                                class="btn btn-warning btn-sm mt-2">Chỉnh sửa</a>
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