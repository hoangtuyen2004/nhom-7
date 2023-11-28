<?php 
namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Favorite extends Model {
    protected $table = 'favorite';
    protected $columns = [
        'id_user',
        'id_news',
    ];
}
?>