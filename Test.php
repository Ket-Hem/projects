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

function isLeapYear(int $year)
{
    $feb = cal_days_in_month(CAL_GREGORIAN, 2, $year);

    if ($feb == 29) {
        return TRUE;
    } else {
        throw new InvalidArgumentException("$year - is not leap year");
    }
}

if(isLeapYear(1948)===TRUE){
    echo "leap TRUE";
    }




function tripleInteger($int)
{
    if(!is_int($int))
        throw new InvalidArgumentException('tripleInteger function only accepts integers. Input was: '.$int);
    return $int * 3;
}
?>
</body>