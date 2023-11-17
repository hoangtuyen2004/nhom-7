<?php

namespace Ductong\BaseMvc;

class Controller {//trong lớp Controller khởi tạo hai phương thức render và renderAdmin
    // Render ra giao diện client
    protected function render($view, $data = []) {//$view là đường dẫn đến tệp giao diện, $data là mảng chứa các biến dữ liệu được truyền vào 
        extract($data);

        include "Views/$view.php";
    }

    // Render ra giao diện Admin
    protected function renderAdmin($view, $data = []) {
        $data['view'] = $view;

        extract($data);

        include "Views/admin/master.php";
    }
}