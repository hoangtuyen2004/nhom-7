<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Create news</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/addmin/dashboard"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="#!">News</a> </li>
                        <li class="breadcrumb-item"><a href="#!">create</a> </li>
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
                                <form action="/admin/news/create" method="post" enctype="multipart/form-data">
                                    <div class="card-header">
                                        <h5>Tạo bài viết</h5>
                                        <span>Add class of <code>.form-control</code> with
                                            <code>&lt;input&gt;</code> tag</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                            <h4 class="sub-title">Giao diện</h4>
                                            <select name="display" class="form-control form-control-default">
                     <!-- DISPLAY -->           <option selected value="1">Mặc định</option>
                                                <option value="2">From 1</option>
                                                <option value="3">From 2</option>
                                            </select>
                                        </div>

                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                            <label class="col-sm-2 col-form-label" for="title">TIÊU ĐỀ</label>
                                            <div class="col-sm-12">
                    <!-- TITLE -->               <input type="text" name="title" class="form-control form-control-lg" placeholder="Nội dung tiêu đề">
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                    <!-- SUBTITLE -->       <label class="col-sm-2 col-form-label" for="subtitle">PHỤ ĐỀ</label>
                                            <div class="col-sm-12">
                                            <textarea rows="5" cols="5" name="subtitle" class="form-control" placeholder="Nội dung phụ đề"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                                <label class="col-sm-2 col-form-label" for="avatar">Upload File</label>
                                                <div class="col-sm-12">
                                                    <input type="file" name="avatar" class="form-control p-1">
                                                </div>
                                        </div>
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                            <div class="col-sm-12">
                                                <label class="ol-sm-2 col-form-label" for="category">Category</label>

                                                <select name="category" class="form-control" >
                                                    <option selected value="">Trống</option>
                                                    <?php foreach ($categorys as $category) :?>
                                                        <option value="<?= $category['id']?>"><?= $category['name']?></option>
                                                    <?php endforeach?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-xl-3 m-b-30 mw-100">
                                            <div class="col-sm-12">
                                                <button type="submit" name="btn-submit" class="btn ml-1 btn-success alert-success-msg m-b-10">Next</button>
                                                <button type="reset" class="btn ml-1 btn-danger alert-success-cancel m-b-10">Reset</button>
                                                <a class="btn ml-1 btn-primary alert-prompt m-b-10">Cancel</a>
                                            </div>
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