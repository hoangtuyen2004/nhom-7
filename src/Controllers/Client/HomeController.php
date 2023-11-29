<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\User;

class HomeController extends Controller
{
    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $this->render('client/home');//Điều hướng tới home.php của clinet
    }
    public function user() {
        $user = (new User)->findOne($_SESSION['id_user']);
        $this->renderUser('acton/user',['user' => $user]);
    }

}   
