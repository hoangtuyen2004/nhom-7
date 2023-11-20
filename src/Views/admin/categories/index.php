<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Category</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Category</a> </li>
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
                                    <h5>Danh sách Category</h5>

                                    <a href="/admin/categories/create" class="btn btn-info btn-sm">Tạo mới</a>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>ID</th>
                                                    <th>Name</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($categories as $category) : ?>
                                                    <tr>
                                                        <td><?= $category['id'] ?></td>
                                                        <td><?= $category['name'] ?></td>
                                                        <td>
                                                            <a href="/admin/categories/update?id=<?= $category['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>

                                                            <form action="/admin/categories/delete?id=<?= $category['id'] ?>" method="post">
                                                                <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm">Xóa</button>
                                                            </form>
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
                <div class="row">
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-red st-cir-card text-white">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div id="status-round-1" class="chart-shadow st-cir-chart" style="width:80px;height:80px">
                                            <h5>SUM</h5>
                                        </div>
                                    </div>
                                    <div class="col text-center">
                                        <h3 class=" f-w-700 m-b-5"><?= count($categories)?></h3>
                                        <h6 class="m-b-0 ">Categorys</h6>
                                    </div>
                                </div>
                                <span class="st-bt-lbl">42</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-blue st-cir-card text-white">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div id="status-round-2" class="chart-shadow st-cir-chart" style="width:80px;height:80px">
                                            <h5>56%</h5>
                                        </div>
                                    </div>
                                    <div class="col text-center">
                                        <h3 class="f-w-700 m-b-5">102</h3>
                                        <h6 class="m-b-0">Goals</h6>
                                    </div>
                                </div>
                                <span class="st-bt-lbl">56</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-green st-cir-card text-white">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div id="status-round-3" class="chart-shadow st-cir-chart" style="width:80px;height:80px">
                                            <h5>83%</h5>
                                        </div>
                                    </div>
                                    <div class="col text-center">
                                        <h3 class="f-w-700 m-b-5">124</h3>
                                        <h6 class="m-b-0">Contacts</h6>
                                    </div>
                                </div>
                                <span class="st-bt-lbl">83</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-md-6">
                        <div class="card card-yellow st-cir-card text-white">
                            <div class="card-block">
                                <div class="row align-items-center">
                                    <div class="col-auto">
                                        <div id="status-round-4" class="chart-shadow st-cir-chart" style="width:80px;height:80px">
                                            <h5>42%</h5>
                                        </div>
                                    </div>
                                    <div class="col text-center">
                                        <h3 class="f-w-700 m-b-5">84</h3>
                                        <h6 class="m-b-0">Accounts</h6>
                                    </div>
                                </div>
                                <span class="st-bt-lbl">42</span>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>