<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once __DIR__ .'/Classes/cats.php';
require_once __DIR__ .'/Classes/product.php';

$prodotti= new products('croccantini', 
    ['Cannetta con topino sopra',
    'Tiragraffi per gatto'],
     'casetta');
var_dump($prodotti);





$cat=new cats('bengala','https://www.gattidelbengala.it/wp-content/uploads/2020/04/Schermata-2020-04-15-alle-11.54.10.png','croccantini','Cannetta con topino sopra',
 'casetta');

var_dump($cat);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <div>
            <h1>Gatto Bengala</h1>
            <img src="https://www.gattidelbengala.it/wp-content/uploads/2020/04/Schermata-2020-04-15-alle-11.54.10.png" alt="">
            <ul>
                <li>
                    <?php echo  'Tipo razza:' ,$cat->razza ?>
                </li>
                <li>
                <?php echo 'Cibo:',$cat->cibo?>
                </li>
                <li>
                <?php echo 'Gioco:' ,$cat->giochi?>
                </li>
                <li>
                <?php echo 'cuccia:',$cat->cucce?>
                </li>
            </ul>
        </div>
    </main>
</body>
</html>
