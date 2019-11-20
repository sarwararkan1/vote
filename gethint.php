<?php
include("config.php");
  $sql = "SELECT * FROM loginnn  ";
$result = $conn->query($sql);
         while($row=mysqli_fetch_array($result)){
             if($row[1]!="admin"){
                 if($row[3]>=18){
                 $a[]= $row[1];

                 }
             }
         }
//Array with names

//get the parameter from from URL
$q = $_REQUEST["q"];
$hint="";
//Lookup the array if difference form ""
if ($q !== "")
{
$q=strtolower($q);
$len=strlen($q);
foreach ($a as $name)
{
//stristr search for first occurrence of substring in string
if (stristr($q, substr($name, 0, $len))) {

if ($hint === "") {
$hint = $name;
} else {
$hint .= ", $name";
}
}
}
}
// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "نه ناسراوه" : $hint;
?>