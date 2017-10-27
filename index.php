<?php

use QL\QueryList;

require './vendor/autoload.php';

//获取昵图网所有的图片:
/*$ql = QueryList::get('http://www.nipic.com')->find('img')->attrs('src');

var_dump($ql);
echo '<hr/>';*/
//获取昵图网的html页面
/*$ql = QueryList::get('http://www.nipic.com');
$html = $ql->getHtml($ql);
echo htmlspecialchars($html);*/

//获取昵图网首页所有的A页面跳转的链接
$data=[];
$ql = QueryList::get('http://www.nipic.com')->rules([
    'url'=>['.newIndex-hotpic','href']
])->query()->getData(function($item){
    return $item;
});
$urls = $ql->all();

if(!empty($urls)) {
    foreach ($urls as $url) {
        $res = QueryList::get($url['url'])->find('img')->attrs('data-original')->all();
        foreach ($res as $k=>$item) {
            if($item) {
                $data[]=$item;
            }
        }
    }
}
var_dump($data);exit;

