<?php 
namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\News;
use Ductong\BaseMvc\Models\User;

class ListController extends Controller {
    public function listNews(){
        $id_news = $_GET['id'];
        $conditions = "id_status = 2";
        $categorys = (new Category)->all();
        $newsDate = (new News)->selectTop('date',5,0,$conditions);
        $newx3 = (new News)->selectTop('id',3,0,$conditions);
        $news = (new News)->findOne($id_news);
        $user = (new User)->all();
        $this->render('client/list/index',['news'=>$news,'user'=>$user,'newx3'=>$newx3,'categorys'=>$categorys,'newsDate'=>$newsDate]);
    }
}
?>