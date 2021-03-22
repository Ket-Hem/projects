<head>
    <meta charset="UTF-8">
    <meta name="description" content="This page is going to become a entrance to my first-created site">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ket-Hem">
    <style>
        h1{
            text-align: center;
            font-size: 250%;
        }
        body{
            text-align: center;
        }
    </style>
<title>test</title>
</head>
<body id = "top_marker">

<?php

include_once 'functionTest.php';

date_default_timezone_set ( 'Europe/Kiev');

echo "<h1>".basename(__FILE__).date(" jS F Y  H:i:s")."</h1><hr>";

/*****************************************************************************/
// НЕ ПРАЦЮЄ створення масиву в масиві
//randomArray();

//функція eval
//evalTest();

//НЕ ПРАЦЮЄ випадкова назвва функції з використанням eval
//randomFunctionName();
class Entree {
    public $name;
    public $ingredients = array();
    public function hasIngredient($ingredient) {
        return in_array($ingredient, $this->ingredients);
    }
}
// создать экземпляр и присвоить его переменной $soup
$soup = new Entree;
// установить свойства экземпляра в переменной $soup
$soup->name = 'Chicken Soup';
$soup->ingredients = array('chicken', 'water');
// создать отдельный экземпляр и присвоить его
// переменной $sandwich
$sandwich = new Entree;
// установить свойства экземпляра в переменной $sandwich
$sandwich->name = 'Chicken Sandwich';
$sandwich->ingredients = array('chicken', 'bread');

$checkIngredient = ['chicken','lemon','bread','water'];

foreach ($checkIngredient as $ing) {
    if ($soup->hasIngredient($ing)) {
        print "Soup contains $ing.\n";
    }
    if ($sandwich->hasIngredient($ing)) {
        print "Sandwich contains $ing.\n";
    }
}
/*****************************************************************************/
?>



<a href="#top_marker"> Up!</a>
</body>