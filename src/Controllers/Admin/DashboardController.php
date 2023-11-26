<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;

class DashboardController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        // var_dump($_SESSION);
        // Kiểm tra xem biến session có tồn tại và có giá trị 'name_account' hay không
        if (isset($_SESSION['name_account'])) {
            // Nếu tồn tại, render trang dashboard
            $this->renderAdmin('dashboard');
        } else {
            // Nếu không, điều hướng về trang đăng nhập
            header('Location: /admin/logins'); 
            exit();
        }
    }
}

