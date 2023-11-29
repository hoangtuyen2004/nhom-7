<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-clipboard bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Basic Form Inputs</h5>
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
                            <a href="#!">Basic Form Inputs</a>
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
                                    <h5>Basic Form Inputs</h5>
                                    <span>Add class of <code>.form-control</code> with
                                        <code>&lt;input&gt;</code> tag</span>
                                </div>
                                <div class="card-block">
                                    <form action="/admin/news/createContent" enctype="multipart/form-data" method="post">
                                    <div class="col-sm-12 form-group row">
                                        <label for="title_1" class="col-sm-2 col-form-label">TITLE-1</label>
                                        <div class="col-sm-12">
                                            <input name="title_1" type="text" class="form-control" placeholder="Tiêu đề 1">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group row">
                                        <label for="title_1_1" class="col-sm-2 col-form-label">TITLE-1.1</label>
                                        <div class="col-sm-12">
                                            <input name="title_1_1" type="text" class="form-control form-control-sm" placeholder="Tiêu đề 1.1">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group row">
                                        <label for="" class="col-sm-2 col-form-label">CONTENT</label>
                                        <div class="col-sm-12">
                                            <textarea name="content_1" rows="5" cols="5" class="form-control" placeholder="Nội dung tiêu đề"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 form-group row">  
                                        <?php
                                            if ($new['id_display']!=1) {
                                                echo "<div class='col-sm-12 form-group row'>
                                                <label class='col-sm-2 col-form-label' for='avatar'>IMAGE</label>
                                                    <div class='col-sm-12'>
                                                        <input name='img_1_1' type='file' name='img' class='form-control p-1'>
                                                    </div>
                                                  </div>";
                                                echo "<div class='col-sm-12 form-group row'>
                                                <label class='col-sm-2 col-form-label' for='avatar'>IMAGE</label>
                                                    <div class='col-sm-12'>
                                                        <input name='img_1_2' type='file' name='img' class='form-control p-1'>
                                                    </div>
                                                </div>";
                                                echo "<div class='col-sm-12 form-group row'>
                                                <label class='col-sm-2 col-form-label' for='avatar'>IMAGE</label>
                                                    <div class='col-sm-12'>
                                                        <input name='img_1_3' type='file' name='img' class='form-control p-1'>
                                                    </div>
                                                </div>";
                                            }
                                            else{
                                                echo "<div class='col-sm-12 form-group row'>
                                                    <label class='col-sm-2 col-form-label' for='avatar'>IMAGE</label>
                                                        <div class='col-sm-12'>
                                                            <input name='img_1' type='file' name='img' class='form-control p-1'>
                                                        </div>
                                                    </div>";
                                            }
                                        ?>
                                    </div>
                                    <br>
                                    <div class="col-sm-12 form-group row button-page">
                                        <button name="btn-submit" type="submit" class="btn waves-effect waves-light btn-grd-primary">Thêm dữ liệu</button>
                                        <input type="submit" name="btn-save" class="btn waves-effect waves-light btn-grd-success" value="LƯU">
                                        <input type="reset" class="btn waves-effect waves-light btn-grd-warning" value="RESET">
                                        <a href="/admin/news/delete?id=<?=$new['id']?>" class="btn waves-effect waves-light btn-grd-danger">CANCAL</a>
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