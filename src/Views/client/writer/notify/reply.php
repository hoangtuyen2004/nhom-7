<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Viết Báo Cáo</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/client/writer/news"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href=""></a></li>
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
                                    <h5>Thông báo <i class="fa-solid fa-print"></i></h5>
                                    <div class="card-header-right">
                                    </div>
                                </div>
                                <div class>
                                    <div class="col-md-12">
                                        <div class="card-header">
                                        </div>
                                        <div class="card-block">
                                            <div class="table-responsive">
                                                <form action="/client/writer/reply" method="post">
                                                        <input type="text" name="id" value="<?=$_POST['id']?>" hidden readonly>
                                                        <label class="col-sm-2 col-form-label">Nội Dung</label>
                                                        <div class="col-sm-12">
                                                            <textarea name="commit" id="commit" cols="5" rows="5"></textarea>
                                                            <span class="messages"></span>
                                                        </div>
                                                            <label class="col-sm-2"></label>
                                                        <div class="col-sm-12">
                                                            <button type="submit" name="save" class="btn btn-primary waves-effect waves-light">Gửi</button>
                                                            <button type="reset"  class="btn btn-danger waves-effect waves-light">Xóa</button>
                                                            <a href="/client/writer/notify" class="btn btn-info waves-effect waves-light">Quay Lại</a>
                                                        </div>
                                                </form>
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