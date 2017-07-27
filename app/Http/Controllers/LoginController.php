<?php
/**
 * @filename:   LoginController.php
 * @author:     Senix
 * @createtime: {2017-7-27} {23:08}
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('login/login');
    }
}
