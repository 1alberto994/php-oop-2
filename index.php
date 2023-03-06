<?php 
require_once __DIR__ .'/Classes/cats.php';
require_once __DIR__ .'/Classes/product.php';

$prodotti= new products('croccantini', 
    ['Cannetta con topino sopra',
    'Tiragraffi per gatto'],
     'casetta');
var_dump($prodotti);





$cat=new cats('bengala','croccantini',['Cannetta con topino sopra',
'Tiragraffi per gatto'],
 'casetta');

var_dump($cat);