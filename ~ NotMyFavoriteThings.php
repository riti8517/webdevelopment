<DOCTYPE html>
<html>
<head>
<title>Title</title>
</head>
<body>

<?php
    echo " Zoya's Favorite Things";
    echo "<br>";
    $SongArtists = "Favorite Song Artists";
    echo $SongArtists;
    $zoyasFavArtists = ["BlackPink", "IVE", "New Jeans"];
    echo "<ul>";
    for($i = 0; $i<count($zoyasFavArtists); $i++){
        echo "<li>" . $zoyasFavArtists[$i] . "</li>";
    }
    echo "</ul>";
    $Food = "Favorite Foods";
    echo $Food;
    $zoyasFavFood = ["Ramen", "chicken alfredo", "pizza"];
    echo "<ul>";
    for($i = 0; $i<count($zoyasFavArtists); $i++){
        echo "<li>" . $zoyasFavFood[$i] . "</li>";
    }
    echo "</ul>";

    $Flower = "Favorite Flowers";
    echo $Flower;
    $zoyasFavFlowers = ["Hydrangea", "lily of the valley", "hyacinth"];
    echo "<ul>";
    for($i = 0; $i<count($zoyasFavFlowers); $i++){
        echo "<li>" . $zoyasFavFlowers[$i] . "</li>";
    
    }
    echo "</ul>";

 ?>
 </body>
 </html>