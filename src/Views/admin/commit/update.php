<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-clipboard bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Forms Validation</h5>
                        <span>lorem ipsum dolor sit amet, consectetur adipisicing elit</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="../index.html"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">Form Components</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="#!">Forms Validation</a>
                        </li>
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
                                    <h5>Basic Inputs Validation</h5>
                                    <span>Add class of <code>.form-control</code> with
                                        <code>&lt;input&gt;</code> tag</span>
                                </div>
                                <div class="card-block">
                                    <form method="post" action="">
                                        <div class="form-group row">    
                                            <label class="col-sm-2 col-form-label">Gửi tới: </label>
                                            <div class="col-sm-10">
                                                <?php if ($user['id']==$commit['id_user']) {
                                                    echo "<input type='text' class='form-control' name='' value='".$user['name_account']."' readonly placeholder='Text Input Validation'>";
                                                }?>
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Reply: </label>
                                            <div class="col-sm-10">
                                                <textarea rows="5" cols="5" name="reply" class="form-control" 
                                                placeholder="Nội dung phải hồi cho người viết"><?php 
                                                        if (isset($commit['reply'])) {
                                                            echo $commit['reply'];
                                                        }
                                                    ?></textarea>
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Đối với bài viết: </label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="id_news" value="<?=$commit['id_news']?>" readonly placeholder="Text Input Validation">
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Trạng thái của bài viết: </label>
                                            <div class="col-sm-10">
                                                <select name="status" class="form-control">
                                                    <?php
                                                    foreach ($status as $statu) {
                                                            $selected = "";
                                                        if ($new['id_status']==$statu['id']) {
                                                            $selected = "selected";
                                                        }
                                                        echo "<option ".$selected." value='".$statu['id']."'>".$statu['name']."</option>";
                                                    }
                                                    ?>
                                                </select>
                                                <span class="messages"></span>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" name="btm-submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                                <a href="/admin/commit"
                                                    class="btn btn-danger waves-effect waves-light">Cancal</a>
                                            </div>
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