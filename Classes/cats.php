<?php
require_once __DIR__.'product.php';
class cats extends products{
    public $razza;

    public function __construct($_razza,$cibo,$giochi,$cucce)
    {
        parent:: __construct($cibo,$giochi,$cucce);
         $this->razza=$_razza;
    }
}

