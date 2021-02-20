<?php
include './includes/header.php';
?>
<!-- 
    //declre variables
    //$aziz = 'A';
    /*  $age = '21';
    echo '<h1>salem ' . $aziz . 'sdf</h1>';
    echo '<h1>salem ' . $age . 'sdf</h1>';
    echo "<h1> my name is $aziz </h1>" */
   
    switch ($aziz) {
        case 'A':
            echo 'Yea';
            break;
        case 'B':
            echo 'NO';
            break;
        default:
            '<h2>a title with h2 format</h2>';
    }
 */


    /*     for ($count = 0; $count < 10; $count++) {
        echo "<p>houssem is the $count</p>";
    } */

    $numbers = array(12, 2, 34, 5, 5, 6, 6, 7, 7, 7);
    echo $numbers[4];
    $size = count($number);
    echo "<h2>this is ur $size</h2>"
    
    
     -->

<?php
$str1  = "houssem";
$str2 = "salem";
echo "hello " . $str1 . " and " . $str2;
echo "<h2>" . strtoupper($str1) . "</h2>";
echo strtolower($str1);
echo 'repeat string ' . str_repeat($str2, 3);
echo ucfirst($str1) . "</br>";
echo ucwords($str2) . "</br>";
echo substr($str2, 0, 2) . "</br>";
echo "</hr>";
echo "</br>";
echo "the position of h at this string is " . strpos($str1, 'h') . '</br>';
echo "find character 'e' in the second variable " . strchr($str2, 'e') . '</br>';
echo "find character 'o' in the first variable " . strchr($str1, 'o') . '</br>';
echo strlen($str2);
$var2 = ' A B C ';
echo
    "testing" . trim($var2) . "</br>";
echo
    "testing" . ltrim($var2) . "</br>";
echo
    "testing" . rtrim($var2) . "</br>";

echo 'replace string with another : ' . str_replace("s", "K", $str2);

?>
<?php
include './includes/footer.php'
?>