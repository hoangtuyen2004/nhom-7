<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class News extends Model {
    protected $table = 'news';
    protected $columns = [
        'avatar',
        'title',
        'subtitle',
        'img_1',
        'img_2',
        'img_3',
        'img_4',
        'date',
        'views',
        'id_status',
        'id_category',
        'id_display',
        'title_1',
        'content_1',
        'title_2',
        'content_2',
    ];
}