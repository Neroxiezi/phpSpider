<?php
/**
 * Created by PhpStorm.
 * User: 运营部
 * Date: 2017/10/27
 * Time: 13:18
 */

namespace Common;


use QL\QueryList;

class CommonController
{
    protected $ql;
    public $url;
    public function __construct($url)
    {
        require '../vendor/autoload.php';
       $this->url=$url;
       $this->ql = QueryList::get($url);
    }

    public function dd($arr){
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        exit;
    }
}