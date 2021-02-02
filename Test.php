<head>
    <meta charset="UTF-8">
    <meta name="description" content="This page is going to become a entrance to my first-created site">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Ket-Hem">
    <style>
        h1{
            color: #363636;
            text-align: center;
            font-family: Calibri;
            font-size: 250%;
        }
    </style>
<title>Test</title>
</head>
<body>
<?php
//echo phpinfo();
echo "<h1>".date('jS F Y  H:i:s')."</h1></br>";

/**
 * The $minute variable contains a number from 0 to 59 (i.e. 10 or 25 or 60 etc).
 * Determine in which quarter of an hour the number falls.
 * Return one of the values: "first", "second", "third" and "fourth".
 * Throw InvalidArgumentException if $minute is negative of greater then 60.
 * @see https://www.php.net/manual/en/class.invalidargumentexception.php
 *
 * @param  int  $minute
 * @return string
 * @throws InvalidArgumentException
 */
function getMinuteQuarter(int $minute=0)
{
    if ($minute < 0 || $minute >= 60) {
        throw new InvalidArgumentException("The number: $minute - doesn\`t fit in minute range. ");
    } elseif ($minute>= 0 && $minute < 15) {
        $answer = "first";
    } elseif ($minute >= 15 && $minute < 30) {
        $answer = "second";
    } elseif ($minute >= 30 && $minute < 45) {
        $answer = "third";
    } else {
        $answer = "fourth";
    }
    return $answer;
}

echo getMinuteQuarter(58);

function tripleInteger($int)
{
    if(!is_int($int))
        throw new InvalidArgumentException('tripleInteger function only accepts integers. Input was: '.$int);
    return $int * 3;
}
?>
</body>