<?php 
namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;
use Ductong\BaseMvc\Models\News;
use Ductong\BaseMvc\Models\User;
use Ductong\BaseMvc\Models\Comment;
use Ductong\BaseMvc\Models\Writing;

class ListController extends Controller {
    public function listNews(){
        $id_news = $_GET['id'];
        $conditions = "id_status = 2";
        $categorys = (new Category)->all();
        $newsDate = (new News)->selectTop('date',5,0,$conditions);
        $newx3 = (new News)->selectTop('id',3,0,$conditions);
        $news = (new News)->findOne($id_news);
        $user = (new User)->all();
        $writing = (new Writing)->all();
        $comment = (new Comment)->all();
        $this->render('client/list/index',['news'=>$news,'user'=>$user,'newx3'=>$newx3,'categorys'=>$categorys,'newsDate'=>$newsDate, 'comment'=>$comment,'writing'=>$writing]);
    }
    
    public function comment()
    {
        // Kiểm tra xem người dùng đã đăng nhập hay chưa
        if (!isset($_SESSION['id_user'])) {
            echo "Bạn cần đăng nhập để bình luận";
            return;
        }
    
        // Lấy dữ liệu từ form
        $data = [
            'id_news' => $_POST['id_news'],
            'id_user' => $_SESSION['id_user'],
            'comment' => $_POST['comment'],
            'note' => '',
            'id_status' => 1, 
        ];
    
        // Thêm dữ liệu vào bảng writing nếu chưa tồn tại
        (new Writing)->insertbl(['id_news' => $data['id_news'], 'id_user' => $data['id_user']]);
    
        // Thực hiện lưu dữ liệu comment vào cơ sở dữ liệu
        (new Comment)->insertbl($data);
    
        // Chuyển người dùng đến trang chi tiết bài viết
        header("Location: /client/list/news?id={$data['id_news']}");
        exit();
    }
    

    

}
?>