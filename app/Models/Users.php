<?php
/**
 * @filename:   Users.php
 * @author:     Senix
 * @createtime: {2017-7-19-0019} {19:25}
 */

namespace Models;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    /**
     * 与model关联的数据表
     *
     * @var string
     */
    protected $table = 'user';
}
