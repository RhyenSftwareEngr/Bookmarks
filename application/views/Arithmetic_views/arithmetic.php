<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title></title>
</head>
<body>

<?php
$choice = "a"; 
$side = 5;
$base = 6;
$height = 7;
				
function areaSquare($side){
$Area = $side * $side;
return $Area;
}

function AreaTriangle($base, $height){
$Area = 0.5 * $base * $height;
return $Area;
}

if ($choice == "S" || $choice == "s"){
echo "The are of Square <br />";
echo "The area of square is " . areaSquare($side);
}

elseif ($choice == "T" || $choice == "t") {
echo "The area of Tringale <br />";
echo "The area of triangle is " . AreaTriangle($base, $height);

}

else {

echo "Invalid Entry";
}
?>

</body>
</html>