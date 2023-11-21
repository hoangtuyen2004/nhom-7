<?php

namespace Ductong\BaseMvc\Models;

use Ductong\BaseMvc\Model;

class News extends Model {
    protected $table = 'news';
    protected $columns = [
        'title',
        'subtitle_1',
        'img_1',
        'content_1',
        'subtitle_2',
        'img_2',
        'content_2',
        'subtitle_3',
        'img_3',
        'content_3',
        'date',
        'views',
        'id_status',
        'id_category',
        'id_display',
    ];
}