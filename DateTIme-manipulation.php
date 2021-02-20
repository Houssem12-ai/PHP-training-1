<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $date = getdate();
    echo " today is the " . $date['mday'] . '/' . $date['mon'] . '/' . $date['year'] . "<br>";
    echo date("m/d/y G.i:s<br>", time()) . "<br>";
    echo date("m/d/y G.i:s<br>") . "<br>";
    echo date("j of F Y, \a\\t g.i a", time()) . "<br>";



    function msg()
    {
        echo "You are reell a nice ";
    }

    msg();

    function addfunc($num1, $num2)
    {
        $sum = $num1 + $num2;
        echo "The sum of $num1 and  $num2 is: $sum<br/>";
    }

    addfunc(4, 6);
    addfunc('23', '23');

    ?>
</body>

</html>