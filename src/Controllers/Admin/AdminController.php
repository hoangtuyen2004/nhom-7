<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Admin;

class AdminController extends Controller
{

    public function index(){
        $this->renderAdmin("logins/index");
    }

    public function login()
    {
        $tb = ''; // Khởi động thông báo lỗi trống

        if (isset($_POST['btn_submit'])) {
            $nameAccount = trim($_POST['name-account']);
            $password = trim($_POST['password']);
            
            $adminModel = new Admin;
            $admin = $adminModel->checkUser("name_account = '$nameAccount' and password = '$password'");
            
            if(!empty($admin)){
                $_SESSION['name_account'] = $admin['name'];
                header('location: /admin/dashboard');
                exit(); 
            } else {
                $tb = 'Tài khoản không tồn tại.Vui lòng kiểm tra lại';
            }
        }

        // Hiển thị đăng nhập cùng thông báo lỗi
        $this->renderAdmin("logins/index", ['tb' => $tb]);
    }
}
