<?php
/**
 * Created by PhpStorm.
 * User: 小粽子
 * Date: 2018/4/2
 * Time: 22:54
 */
namespace App\Http;

use Illuminate\Database\Eloquent\Model;

class Boss extends Model
{
    protected $table = 'boss';
    public $timestamps = false;
    protected $primaryKey = 'id';

}