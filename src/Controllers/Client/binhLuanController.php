<?php 
namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\Comment;
use Ductong\BaseMvc\Models\News;
use Ductong\BaseMvc\Models\User;
use Ductong\BaseMvc\Models\Writing;

class binhLuanController extends Controller {
    public function index() {
        $id_news=$_POST['id_news'];
        $conditions = [
            ['id_news','=',$id_news]
        ];
        $user = (new User)->all();
        $news = (new News)->findOne($id_news);
        $categorys = (new Category)->all();
        $comment = (new Comment)->findColumns($conditions);
        $this->renderWriter('comment/list',['news'=>$news,'user'=>$user,'comment'=>$comment,'categorys'=>$categorys]);
    }
    public function unlist() {
        $id = $_GET['id'];
        $conditions = "id = ".$id;
        $column = "id_status";
        (new Comment)->updateColumn($column,3,$conditions);
        header('location: /client/writer/comment');
    }
    public function list() {
        $id = $_GET['id'];
        $conditions = "id = ".$id;
        $column = "id_status";
        (new Comment)->updateColumn($column,2,$conditions);
        header('location: /client/writer/comment');
    }
}

?>