<?php

namespace Ductong\BaseMvc\Controllers\Admin;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Admin;

class AdminController extends Controller
{

    public function index(){
        $this->render("admin/logins/index");
    }

    public function login()
    {
        
        $admins = (new Admin)->all();
        foreach ($admins as $admin) {
            if ($_POST['user-name']==$admin['name_account'] && $_POST['password']==$admin['password']) {
                $_SESSION['name_account'] = $_POST['user-name'];
                $_SESSION['id_admin'] = $admin['id'];                           //Mã nguồn ADMIN
            }
        }
        if (isset($_SESSION['name_account']) && isset($_SESSION['id_admin'])) {
            header('location: /admin/dashboard');
        }
        else{
            $err = [
                'account_err'=> 'Tài khoản không chính xác',
                'password'=>'Mật khẩu không đúng',
            ];
            $this->render("admin/logins/index", ['err'=>$err]);
        }
    }
    public function logout(){
        session_destroy();                      //Xóa Thông tin
        header('location: /admin/dashboard');
    }
}