<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>User</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">User</a> </li>
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
                        <div class="col-md-12 col-xl-4">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Impressions</h6>
                                            <h3 class="f-w-700 text-c-blue">1,563</h3>
                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-eye bg-c-blue"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-4">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Impressions</h6>
                                            <h3 class="f-w-700 text-c-blue">1,563</h3>
                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-edit bg-c-yellow"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-4">
                            <div class="card comp-card">
                                <div class="card-body">
                                    <div class="row align-items-center">
                                        <div class="col">
                                            <h6 class="m-b-25">Impressions</h6>
                                            <h3 class="f-w-700 text-c-blue">1,563</h3>
                                            <p class="m-b-0">May 23 - June 01 (2017)</p>
                                        </div>
                                        <div class="col-auto">
                                        <i class="fa fa-user-times bg-c-red"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Danh sách User</h5>

                                    <a href="/admin/users/create" class="btn btn-info btn-sm">Tạo mới</a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Name-account</th>
                                                    <th>Password</th>
                                                    <th>birthday</th>
                                                    <th>img</th>
                                                    <th>email</th>
                                                    <th>ID_Role</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody>
                                                <?php foreach ($users as $user) : ?>
                                                    <tr>
                                                        <td><?= $user['id'] ?></td>
                                                        <td><?= $user['name'] ?></td>
                                                        <td><?= $user['name_account'] ?></td>
                                                        <td><?= $user['password'] ?></td>
                                                        <td><?= $user['birthday'] ?></td>
                                                        <td style="width:10%;"><img style="width: 100%;" src="/img_file/<?=$user['img']?>" alt="ảnh"></td>
                                                        <td><?= $user['email'] ?></td>
                                                        <td><?php if($user['id_role']==1){echo 'user';}else if($user['id_role']==2){echo 'writer';}else{echo 'blocked';}?></td>
                                                        <td>
                                                            <a href="/admin/users/update?id=<?= $user['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>

                                                            <form action="/admin/users/delete?id=<?= $user['id'] ?>" method="post">
                                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm mt-2">Xóa</button>
                                                            </form>
                                                                <a href="<?php if($user['id_role']!=3){echo "/admin/users/blocked";}else{echo "/admin/users/Unblocked";}?>?id=<?= $user['id'] ?>" onclick="return confirm('Thao tác với người dùng <?= $user['name']?>')" class="btn bg-warning btn-sm mt-2"><?php if($user['id_role']!=3){echo "blocked";} else{echo "Unblocked";}?></a>
                                                        </td>
                                                    </tr>
                                                <?php endforeach; ?>
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