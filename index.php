<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

echo "Užduotis 1<br>";
$name = "Vardenis";
$surname = "Pavardenis";
if (strlen($name) > $surname) {
    echo $surname;
}
 else {
    echo $name;
};


echo "<br><br>Užduotis 2<br>";
$firstName = "Vardenis";
$lastName = "Pavardenis";
$firstName = strtoupper($firstName);
$lastName = strtolower($lastName);
echo $firstName . " " . $lastName;


echo "<br><br>Užduotis 3";
$actorName = "Vardenis";
$actorSurname = "Pavardenis";
$actorName = substr($actorName, -8, 1);
$actorSurname = substr($actorSurname, -10, 1);
$mixed = $actorName . $actorSurname;
echo "<br>$mixed";


echo "<br><br>Užduotis 4";
$actorFirstName = "Vardenis";
$actorLastName = "Pavardenis";
$actorFirstName = substr($actorFirstName, -3);
$actorLastName = substr($actorLastName, -3);
 $complete = $actorFirstName . $actorLastName;
 echo "<br>$complete";


echo "<br><br>Užduotis 5<br>";
$movie = "An American in Paris";
$movie = str_ireplace("a", "*", $movie);
echo $movie;


echo "<br><br>Užduotis 6<br>";
$movieName = "An American in Paris";
$movieName = substr_count(strtolower($movieName), strtolower("a"));
echo $movieName;


echo "<br><br>Užduotis 7<br>";
$movie1 = "An American in Paris";
$movie1 = preg_replace("/[aeiyou]/i", " ", $movie1);
$movie2 = "Breakfast at Tiffany's";
$movie2 = preg_replace("/[aeiyou]/i", " ", $movie2);
$movie3 = "2001: A Space Odyssey";
$movie3 = preg_replace("/[aeiyou]/i", " ", $movie3);
$movie4 = "It's a Wonderful Life";
$movie4 = preg_replace("/[aeiyou]/i", " ", $movie4);
echo $movie1 . "<br>" . $movie2 . "<br>" . $movie3 . "<br>" . $movie4;


echo "<br><br>Užduotis 8<br>";
$starWars = 'Star Wars: Episode ' .str_repeat('', rand(0,5)) . rand(1,9) . ' - A New Hope'; 
$episodeNum = preg_replace('/[^1-9]/', '', $starWars);
echo $episodeNum;


echo "<br><br>Užduotis 9<br>";
$movie5 = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$movie5 = preg_replace('/\b[a-z]{6,}\b/i',' ',$movie5);
$movie5 = str_word_count($movie5);
echo $movie5;
$movie6 = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$movie6 = preg_replace('/\b[a-z]{6,20}\b/i',' ',$movie6);
$movie6 = str_word_count($movie6);
echo "<br>" . $movie6;


echo "<br><br>Užduotis 10<br>";
$stringLength = 3;
$randomString = substr(strtolower(str_shuffle("abcdefghijklmnopqrstuvwxyz")),1,$stringLength);
echo $randomString;


echo "<br><br>Užduotis 11<br>";
$firstMovie = "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$secondMovie = "Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$joined = $firstMovie . " " . $secondMovie;
$joined = explode(" ", $joined);
shuffle($joined);
$joined = implode(" ", $joined);
preg_match('/^(?>\S+\s*){1,10}/', $joined, $random);
echo rtrim($random[0]);

?>
</body>
</html>