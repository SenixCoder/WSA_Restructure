<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Authority extends Model
{
    /**
     * 与model关联的数据表
     *
     * @var string
     */
    protected $table = 'role_priv';
}
