<?php

class Tools
{
    public static function SubmitPostData($url,$postdata){
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,"http://www.jb51.net");
        curl_setopt($ch,CURLOPT_POST, 1);
        curl_setopt($ch,CURLOPT_POSTFIELDS, $postdata);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}

?>