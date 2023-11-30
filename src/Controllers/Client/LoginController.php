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
}
?>