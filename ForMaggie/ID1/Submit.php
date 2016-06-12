<?php
use ForMaggie\ID1\Exceptions\NoHttpParamException;
use ForMaggie\ID1\Checker;
use ForMaggie\ID1\Exceptions\ParamNotUrlException;
/**
 * @author Axoford12
 * @see QQ: 847072154
 * @version 1.0.0
 * @since 2016.6.12 15:02
 * Start 2016.6.12 (15:02)
 * End 216.6.12    (15:58)
 */
require 'Exceptions/NoHttpParamException.php';
require 'Exceptions/ParamNotUrlException.php';
require 'Checker.php';
require 'Tools.php';

/**
 * @todo
 * 这里的if判断是否是用户直接访问，如果是则抛出异常。
 */
if (!isset($_POST[ 'url'])){
    throw new NoHttpParamException('NoParam', 1);
}

/**
 * 
 * @var url
 * 此处的变量URL是html提交的变量url
 * 这里的if判断是否为http的url。
 * 如果不是则抛出异常
 */

$url = $_POST[ 'url'];
if (!Checker::isHttpUrl($url)){
    throw new ParamNotUrlException('YourUrlIsNotAVerifiedUrl', 1);
    
}

/**
 * @todo
 * 此处开始提交数据。
 * @var post 这里是post数据。
 */
$post = array('url' => $url);
$result = Tools::SubmitPostData($url, $post);

print_r($result);