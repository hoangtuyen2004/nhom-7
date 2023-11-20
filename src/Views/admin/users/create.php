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
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Thêm mới </h5>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <label for="name">Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Your name" required>

                                        <label for="name_account" class="mt-3">Name_account</label>
                                        <input type="text" name="name_account" class="form-control" placeholder="name account" required>

                                        <label for="password" class="mt-3">Password</label>
                                        <input type="password" name="password" class="form-control" required placeholder="Password">

                                        <label for="birthday" class="mt-3">Birthday</label>
                                        <input type="date" name="birthday" class="form-control" required>

                                        <label for="img" class="mt-3">Your IMAGE</label>
                                        <input type="file" name="img" required><br>
    
                                        <label for="email" class="mt-3">Email</label>
                                        <input type="email" name="email" class="form-control" required placeholder="your email">

                                        <input type="text" name="id_role" hidden value="1">

                                        <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
                                        <a href="/admin/users" class="btn btn-primary mt-3">Quay lại d/s</a>
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