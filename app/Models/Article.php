<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /**
     * 与model关联的数据表
     *
     * @var string
     */
    protected $table = 'article';
}
