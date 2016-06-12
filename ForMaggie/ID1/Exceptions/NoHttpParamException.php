<?php
namespace ForMaggie\ID1\Exceptions;

class NoHttpParamException extends \Exception
{
    public function __construct($message,$code){
        parent::__construct($message,$code);
    }
}

?>