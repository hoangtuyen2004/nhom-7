<?php 
namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;

class LoginController extends Controller {

    public function login() {
        $users = (new User)->all();
        if (isset($_POST['btm-submit'])) {
            $account_user = $_POST['user-name']; 
            $password = $_POST['password'];
            if (isset($account_user) && isset($password)) {
                foreach ($users as $user) {
                    if ($user['name_account']==$account_user && $user['password']==$password) {
                        $_SESSION['name_account'] = $account_user;
                        $_SESSION['id_user'] = $user['id'];
                        $_SESSION['id_role'] = $user['id_role'];
            header('location: /');
                    }
                }
            }
        }
        
        $this->render('client/login/index');
    }
    public function logout(){
        session_destroy();
        header('location: /');
    }

    public function register() {
        $tb = "";
        if (isset($_POST['btn_submit'])) {
            $data = [
                'name_account' => $_POST['name_account'],
                'email' => $_POST['email'],
                'password' => $_POST['password'],
                'id_role' => $_POST['id_role']
            ];

            // Kiểm tra xem tên người dùng đã tồn tại hay chưa
            $existingUser = $this->checkUser($data['name_account']);

            if ($existingUser) {
                // Nếu tên người dùng đã tồn tại, hiển thị thông báo và không thêm vào cơ sở dữ liệu
                $tb = "Tên người dùng đã tồn tại. Vui lòng chọn một tên khác.";
            } else {
                // Nếu tên người dùng chưa tồn tại, thêm vào cơ sở dữ liệu
                (new User())->insertTk($data);
                header('location: /');
            }
        }

        $this->render('client/registers/index', compact('tb'));
    }

    private function checkUser($nameAccount) {
        $users = (new User())->all();
        foreach ($users as $user) {
            if ($user['name_account'] == $nameAccount) {
                return true;
            }
        }
        return false;
    }
}
?>