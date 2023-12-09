<?php 

namespace Ductong\BaseMvc\Controllers\Client;

use Ductong\BaseMvc\Controller;
use Ductong\BaseMvc\Models\Category;

class CategorController extends Controller {

    /* Lấy danh sách */
    public function index() {
        $categories = (new Category())->all();
        $this->renderClient("categories/index", ["categories" => $categories]);
    }


    /* Cập nhật */
    public function update() {

        if (isset($_POST["btn-submit"])) { 
            $data = [
                'name' => $_POST['name'],
            ];

            $conditions = [
                ['id', '=', $_GET['id']],
            ];

            (new Category())->update($data, $conditions);
        }

        $category = (new Category())->findOne($_GET["id"]);

        $this->renderClient("categories/update", ["category" => $category]);
    }

    /* Xóa */
    public function delete() {
        $conditions = [
            ['id', '=', $_GET['id']],
        ];

        (new Category())->delete($conditions);

        header('Location: /client/categories');
    }
}