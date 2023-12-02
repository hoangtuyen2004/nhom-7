<?php

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\News;
use Ductong\BaseMvc\Models\User;

class HomeController extends Controller
{

    /*
        Đây là hàm hiển thị danh sách user
    */
    public function index() {
        $categorys=(new Category)->all();
        $newsDate = (new News)->selectTop('date',4,0);
        $newCategorys = (new News)->selectTop('id_category',2,0);
        $newCategory2 = (new News)->selectTop('id_category',4,2);
        $newTop1 = (new News)->selectTop('views',1,0);
        $newTop2 = (new News)->selectTop('views',1,1);
        $newTop3 = (new News)->selectTop('views',2,2);
        $this->render('client/home', ['newTop'=>$newTop1,'categorys'=>$categorys,'newTop2'=>$newTop2,'newTop3'=>$newTop3, 'newsDate'=>$newsDate, 'newCategorys'=>$newCategorys,'newCategory2'=>$newCategory2]);//Điều hướng tới home.php của clinet
    }
    public function user() {
        if (isset($_SESSION['id_user'])) {
            $user = (new User)->findOne($_SESSION['id_user']);
            $this->renderUser('acton/user',['user' => $user]);
        }
        else {
            header('location: /client/login');
        }
    }

}   
