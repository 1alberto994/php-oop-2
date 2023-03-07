<?php
require_once __DIR__.'../Traits/nome.php';
class products{
    use Nome;
    public $cibo;
    public $giochi;
    public $cucce;

    public function __construct( $cibo,$giochi,$cucce)
    {
        $this->cibo=$cibo;
        $this->giochi=$giochi;
        $this->cucce=$cucce;
    }
}
