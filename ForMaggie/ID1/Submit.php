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
 * �����if�ж��Ƿ����û�ֱ�ӷ��ʣ���������׳��쳣��
 */
if (!isset($_POST[ 'url'])){
    throw new NoHttpParamException('NoParam', 1);
}

/**
 * 
 * @var url
 * �˴��ı���URL��html�ύ�ı���url
 * �����if�ж��Ƿ�Ϊhttp��url��
 * ����������׳��쳣
 */

$url = $_POST[ 'url'];
if (!Checker::isHttpUrl($url)){
    throw new ParamNotUrlException('YourUrlIsNotAVerifiedUrl', 1);
    
}

/**
 * @todo
 * �˴���ʼ�ύ���ݡ�
 * @var post ������post���ݡ�
 */
$post = array('url' => $url);
$result = Tools::SubmitPostData($url, $post);

print_r($result);