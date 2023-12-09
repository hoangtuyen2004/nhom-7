<?php 
namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\News;
use Ductong\BaseMvc\Models\Writing;

class binhLuanController extends Controller {
    public function index() {
        $id_news=$_POST['id_news'];
        $conditions = [
            ['id_news','=',$id_news]
        ];
        $news = (new News)->findOne($id_news);
        $categorys = (new Category)->all();
        $this->renderWriter('comment/list',['news'=>$news,'categorys'=>$categorys]);
    }
}
?>