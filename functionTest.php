<head>
    <meta charset="UTF-8">
    <meta name="description" content="This page is going to become a entrance to my first-created site">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ket-Hem">
    <style>
        h1{
            color: #363636;
            text-align: center;
            font-size: 250%;
        }
        body{
            text-align: center;
        }
    </style>
<title>functionTest</title>
</head>
<body>
<?php
/*******************************************************************************/
function randomArray ()
{
    $array = [];
    $arrayBig = [];

    for ($i=0; $i<5; $i++) {
        for($i=0; $i<5; $i++) {
            $array[] = mt_rand(100,400);
        }
        $arrayBig[] = array_fill(0,1,$array);
    }

    return $arrayBig;
}
function evalTest()
{
    $string = 'чашка';
    $name = 'кофе';
    $str = 'Это $string с моим $name.';
    echo $str. "\n";
    eval("\$str = \"$str\";");
    echo $str. "\n";
}
function randomFunctionName ()
{
    $squarers = [];
    for ($i = 0; $i < 1000; $i++) {
        $id = uniqid("F", true);+
        eval ("function $id () { echo $i * $i; }");
        $squarers[] = $id;
    }
    return $squarers;
}
/*******************************************************************************/
?>
</body>

