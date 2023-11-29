<?php 
namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Writing extends Model{
    protected $table = 'writing';
    protected $columns = [
        'id_user',
        'id_news',
    ];
}
?>