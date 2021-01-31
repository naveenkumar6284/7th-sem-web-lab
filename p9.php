<?php 
 
$states = "Mississippi Alabama Texas Massachusetts Kansas"; 
$statesArray = []; 
$states1 = explode(' ',$states); 
echo "Original Array :<br>"; 

foreach ( $states1 as $i => $value ) 
print("STATES[$i]=$value<br>"); 

echo "<br>State Names ending with xas :<br>";
foreach($states1 as $state)  { 
if(preg_match( '/xas$/', ($state))) 
$statesArray[0] = ($state); 
} 

echo "<br><br>State Names starting with M and ending with s/i :<br>";
foreach($states1 as $state) { 
if(preg_match('/^M.*s$/i', ($state))) 
$statesArray[1] = ($state); 
} 

echo "<br><br>State Names starting with K and ending with s :<br>";
foreach($states1 as $state) { 
if(preg_match('/^K.*s$/', ($state))) 
$statesArray[2] = ($state); 
} 

echo "<br><br>Resultant Array :<br>";
foreach($states1 as $state){ 
if(preg_match('/a$/', ($state))) 
$statesArray[3] = ($state); 
} 

echo "<br><br>Resultant Array :<br>"; 
foreach ( $statesArray as $array => $value ) 
print("STATES[$array]=$value<br>"); 

?>
