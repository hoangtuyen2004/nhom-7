<?php 
namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Note extends Model {
    protected $table = 'note';
    protected $columns = [
        'commit',
        'reply',
        'id_news',
        'id_user',
    ];
}
?>