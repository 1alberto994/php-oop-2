<?php

class products{
    public $cibo;
    public $giochi;
    public $cucce;

    public function __construct($cibo,$giochi,$cucce)
    {
        $this->cibo=$cibo;
        $this->giochi=$giochi;
        $this->cucce=$cucce;
    }
}
