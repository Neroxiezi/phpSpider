<?php
/**
 * Created by PhpStorm.
 * User: 运营部
 * Date: 2017/10/27
 * Time: 13:17
 */
namespace Common\TouTiao;

use Common\CommonController;

class IndexController extends CommonController
{
    public function rules($arr) {
        if(empty($arr)) return 'Error';
        return $this->ql->rules($arr);
    }

    public function getHtml() {
        return $this->ql->getHtml();
    }
}