<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class News extends Model {
    protected $table = 'news';
    protected $columns = [
        'avatar',
        'title',
        'subtitle',
        'date',
        'views',
        'id_status',
        'id_category',
        'id_display'
    ];
}