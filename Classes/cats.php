<?php
require_once __DIR__.'/product.php';
require_once __DIR__.'../Traits/nome.php';
class cats extends products{
    use Nome;
    public $razza;
    public $URL;

    public function __construct($_razza,$URL,$cibo,$giochi,$cucce)
    {
        parent:: __construct($cibo,$giochi,$cucce);
         
         $this->URL=$URL;
         if(strlen($_razza)<5){
            throw new Exception('nome non valido');
        }
        else{
            $this->razza=$_razza;
        }
    }
    
}

