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
            text-align: center
         }
    </style>
<title>Test</title>
</head>
<body>
<?php
date_default_timezone_set ( 'Europe/Kiev');
echo "<h1>".basename(__FILE__).date(" jS F Y  H:i:s")."</h1><hr>";
/****************************************************************************/


function getBrandName(string $noun)
{
    if ($noun[0] == $noun[strlen($noun)-1]) {
        return ucfirst($noun.substr($noun,1));
    }
    return "The ".ucfirst($noun);
}

echo getBrandName('abca');

/*****************************************************************************/
?>
</body>