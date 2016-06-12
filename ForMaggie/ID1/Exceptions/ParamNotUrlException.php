<?php
namespace ForMaggie\ID1\Exceptions;

class ParamNotUrlException extends \Exception
{
    public function __construct($message,$code){
        parent::__construct($message,$code);
    }
}

?>