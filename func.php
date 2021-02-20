<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $num  = 6;
    echo $num . '<br>';
    function add(&$num)
    {
        $num += 10;
    }
    add($num);
    echo $num;

    function add2($num10, $num2)
    {
        return $num10 + $num2;
    }
    echo add2(34, 34);

    ?>
</body>

</html>