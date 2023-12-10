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
                                    <h5>Thông báo <i class="fa-solid fa-bell fa-shake"></i></h5>
                                    <div class="card-header-right">
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
                                                            <th>Người Gửi</th>
                                                            <th>Nội dung</th>
                                                            <th>Bài Viết</th>
                                                            <th>Lựa Trọn</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                       <?php foreach ($notifys as $notify) :?>
                                                        <tr>
                                                            <td style="width: 10px;">Admin</td>
                                                            <td><?=$notify['reply']?></td>
                                                            <td style="width: 10px;"><p class="badge badge-lg bg-info"><?=$notify['id_news']?></p></td>
                                                            <td style="width: 10px;">
                                                                <a href="#" type="submit" class="btn waves-effect waves-dark btn-inverse btn-outline-inverse">Phản Hồi</a>
                                                                <a href="#" class="btn waves-effect waves-dark btn-danger btn-outline-danger"><i class="icofont fa-regular fa-eye"></i> Xem</a>
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