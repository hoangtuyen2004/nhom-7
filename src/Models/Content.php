<?php 
namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Content extends Model {
    protected $table = 'content';
    protected $columns = [
        'content',
        'img_1',
        'img_2',
        'img_3',
        'id_title_1',
    ];
}
?>