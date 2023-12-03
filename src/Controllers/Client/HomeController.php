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
        $conditions = "id_status = 2";
        $news = (new News)->selectTop('date',4,1,$conditions);
        $categorys=(new Category)->all();
        $newsDate = (new News)->selectTop('date',5,0,$conditions);
        $newCategorys = (new News)->selectTop('id_category',2,0,$conditions);
        $newCategory2 = (new News)->selectTop('id_category',4,2,$conditions);
        $newTop1 = (new News)->selectTop('views',1,0,$conditions);
        $newTop2 = (new News)->selectTop('views',1,1,$conditions);
        $newTop3 = (new News)->selectTop('views',1,2,$conditions);
        $newTop4 = (new News)->selectTop('views',1,3,$conditions);
        $newsCatary = (new News)->selectTop('id_category',1,0,"id_status = 2");
        $newx3 = (new News)->selectTop('id',3,0,$conditions);
        $this->render('client/home', ['newTop'=>$newTop1,
        'newTop4'=>$newTop4,
        'newx3'=>$newx3,
        'categorys'=>$categorys,
        'newTop2'=>$newTop2,
        'newsCatary'=>$newsCatary,
        'newsTT'=>$news,
        'newTop3'=>$newTop3,
        'newsDate'=>$newsDate,
        'newCategorys'=>$newCategorys,
        'newCategory2'=>$newCategory2]);//Điều hướng tới home.php của clinet
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