<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/4/2
 * Time: 22:54
 */

namespace App\Http\Controllers;

use App\Http\Boss;

class ApiController extends Controller
{

    protected $boss;
    public function __construct(Boss $boss)
    {
        $this->boss = $boss;
    }

    // boss直聘
    public function boss()
    {
        $result = $this->boss->newQuery()->paginate(10);
        return response()->json(['code' => 200,'result' => $result]);
    }
}