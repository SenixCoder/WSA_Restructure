<?php
/**
 * @filename:   UsersData.php
 * @author:     Senix
 * @createtime: {2017-7-19-0019} {19:36}
 */
namespace Repositories;

use Exception;
use Models\Users;

class UsersData
{
    protected $userName;

    public function __construct($name = NULL)
    {
        $this->userName = $name;
    }

    public function password()
    {
        if(empty($this->userName)) {
            return "用户名为空，请设置用户名";
        }
        $pwd = Users::where('account', $this->userName)->first();
        if(empty($pwd)) {
            return “请输入密码”;
        }

        return $pwd;
    }
}