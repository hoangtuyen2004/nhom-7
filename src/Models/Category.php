<?php

namespace Dell\Nhom7\Models;

use Dell\Nhom7\Model;

class Category extends Model {
    protected $table = 'categories';
    protected $columns = [
        'name',
    ];
}