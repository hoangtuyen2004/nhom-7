<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class Comment extends Model {
    protected $table = 'comment';
    protected $columns = [
        'id',
        'id_news',
        'id_user',
        'content',
        'note',
        'id_status',
    ];
}
