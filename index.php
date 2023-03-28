<?php 
/*
echo 123, 10.5,'HELLLLLLLLLLLOOOOOOOOOO123';

print_r([1,2,3,4,5]);

var_dump('Hello');

var_dump(true);

var_export('Hello');
*/

$name = 'Daddy'; //string
$age = 54; //int
$has_potential = false; //Bool
$cash_on_hand = 100000.75; //float

// var_dump($cash_on_hand);

// echo $name . ' is ' . $age . ' years old '

// echo "${name} is ${age} years old";

//$x = '5' + '5';
// var_dump($x);
// echo 10 - 5;
// echo 5 * 6;
// echo 10 / 2;
// echo 10 % 3;

// define('HOST', 'localhost');

// echo HOST;

// ARRAYYYYYS 
/*$numbers = [1,44,55,23];
$fruits = array('apple', 'orange', 'banana');

print_r($numbers);
var_dump($numbers);

echo $fruits[1];*/

/*
Assosiative Array
$colors = [
    1 => 'red',
    4 => 'blue',
    6 => 'green'
];
echo $colors[4];
*/


// 1 UZDUOTIS

$country = 'Lietuva';
$city = 'Vilnius';
$population = 574221;
?>

<html>
    <!DOCTYPE html>
    <html lang="en">
    <head>
    </head>
    <body>
        <ul>
            <li> <?php echo $country ?> </li>
            <li> <?php echo $city ?> </li>
            <li> <?php echo $population ?> </li>
        </ul>
    </body>
    </html>
</html>

<?php 
// 2 UZDUOTIS

echo $city . ' - Lietuvos sostinė. ';

echo "$city ir $country sparčiai auga.";
?>
<html><br></html>
<?php

// 3 UZDUOTIS
$x = 10;
$y = 7;
$sum = $x + $y;
$min = $x - $y;
$dau = $x * $y;
$lie = $x / $y;
$dal = $x % $y;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <ul style="list-style-type: none">
        <li> <?php echo "$x + $y = $sum"; ?></li>
        <li> <?php echo "$x - $y = $min"; ?></li>
        <li> <?php echo "$x * $y = $dau"; ?></li>
        <li> <?php echo "$x / $y = $lie"; ?></li>
        <li> <?php echo "$x % $y = $dal"; ?></li>
    </ul>
</body>
</html>

<?php



// 4 UZDUOTIS
    $cities = ['Berlynas', 'Roma', 'Londonas'];
    array_push($cities,'Tokijas');
    $cities2 = ['Tokijas'=> '13.6', 'Vašingtonas'=>'0.6', 'Maskva'=>'11.5'];
    foreach($cities2 as $x => $val) {
        echo "$x = $val<br>";
    }
    $cities2['Londonas'] = '8.6';
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <ul>
        <li><?php echo $cities[1] ?></li>
        <li><?php echo "Gyventojų skaičius: $cities2[Tokijas]";?></li>
    </ul>
</body>
</html>

<?php 
/*
$age = 2;
if($age >= 18) {
    echo 'You are old enough to vote';
} else {
    echo 'Sorry, you are not old enough to vote';
}
*/



// $t = date("H");
// if($t < 12) {
//     echo 'Good Morning';
// } elseif($t < 17) {
//     echo 'Good Afternoon';
// } else {
//     echo 'Good Evening';
// }


// $posts = ['First Post'];
// if(!empty($posts)) {
//    echo $posts[0];
//}

//5 UZDUOTIS

$metai = 1222;
$cities3 = ['Vašingtonas'=> 1790];
if($metai >= 1790) {
    echo 'Vašingtonas yra JAV sostinė';
} elseif($metai == 1774) {
    echo 'JAV sostinė yra Filadelfijoje';
} else { 
    $metai2 = 1790 - $metai;
    echo "Liko $metai2 metai(-ų) iki Vašingtono įkūrimo.";
}

//6 UZDUOTIS

$cities4 = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];
?>
<html>
    <ul> <?php for ($x = 0; $x < 4; $x++)
    echo "<li>$cities4[$x]; <br>";
    echo count ($cities4);?></ul>
</html>
<html>
    <ul> <?php foreach ($cities4 as $value) {
        echo "$value <br>";
        }?>
    </ul>
</html>

<?php
// 7 UZDUOTIS

$temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
//print_($temp);
foreach ($temp as $value) {
    echo "$value, ";}
$average = array_sum($temp) / count($temp);
echo "<br>$average<br>";
echo round($average);
rsort($temp);
$highest = array_slice($temp, 0, 5);
//print_r($highest);
$lowest = array_slice($temp, -5);
//print_r($lowest);
echo "<br>";

//8 UZDUOTIS

$ceu = ["Italija"=>"Roma",
"Liuksemburgas"=>"Liuksemburgas", "Belgija"=> "Briuselis",
"Danija"=>"Kopenhaga", "Suomija"=>"Helsinkis", "Prancūzija" =>
"Paryžius", "Slovakija"=>"Bratislava",
"Slovenija"=>"Liublijana", "Vokietija" => "Berlynas", "Graikija"
=> "Atėnai", "Airija"=>"Dublinas",
"Nyderlandai"=>"Amsterdamas", "Portugalija"=>"Lisabona",
"Ispanija"=>"Madridas", "Švedija"=>"Stokholmas", "Didžioji
Britanija"=>"Londonas", "Kipras"=>"Nikosija",
"Lietuva"=>"Vilnius", "Čekija"=>"Praha", "Estija"=>"Talinas",
"Vengrija"=>"Budapeštas", "Latvija"=>"Ryga",
"Malta"=>"Valeta", "Austrija" => "Viena", "Bulgarija" =>
"Sofija", "Rumunija" => "Bukareštas", "Lenkija" => "Varšuva"];
asort($ceu);
//print_r($ceu);
foreach($ceu as $x => $val) {
    echo "$x = $val<br>";
}
echo "<br>";

//9 UZDUOTIS

function plotas($length = 2, $width = 4)
{
    $area = $length * $width;
    echo "Staciakampio plotas yra: $area" ;
}
plotas();

//ARRAY FUNCTIONS

$fruits = ['apple', 'orange', 'pear'];

//LENGTH
//echo count($fruits);

//SEARCH ARRAY
//var_dump(in_array('apple', $fruits));

//ADD TOARRAY
$fruits[] = 'grape';
array_push($fruits, 'blueberry', 'strawberry');
array_unshift($fruits, 'mango');  //begining

//REMOVE FROM ARRAY
//array_pop($fruits); //from end
//array_shift($fruits); //from beggining
//unset($fruits[2]); //removes specific item

//SPLIT INTO CHUNKS
$chuncked_array = array_chunk($fruits, 2);

//print_r($chuncked_array);

//COMBINES ARRAYS
$arr1 = [1,2,3];
$arr2 = [4,5,6];
$arr3 = array_merge($arr1, $arr2);

$a = ['green', 'red', 'yellow'];
$b = ['avocado', 'apple', 'banana'];
$c = array_combine($a, $b);
//print_r($c);

//KEYS IN ARRAYS
$keys = array_keys($c);

//FLIPPED ARRAYS
$flipped = array_flip($c);
//print_r($flipped);

//ARRAY RANGE
$numbers = range(1,20);
//MAP
$newNumbers = array_map(function($number) {
    return "Number $number";
}, $numbers);
//print_r($newNumbers);




