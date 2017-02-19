<!DOCTYPE html>
<html>
<head><title>Sort</title></head>
<body>
<form action="sort.php" method="post">
  Enter the numbers:<br>
  <input type="text" name="numbers"><input type="submit" name="sort"  value="Sort"><input type="submit" name="asort" value="Asort"><button type = "button" onclick="window.location.href='sort2.php'">For Paired Values</button><br>
</form> 
<?php
if(isset($_POST['sort'])||isset($_POST['asort']))
{
echo "The sorted array is:<br>";
$numbers = $_POST['numbers'];
$integerIDs = array_map('intval', explode(' ', $numbers));
$arrlength = count($integerIDs);
if(isset($_POST['sort']))
	sort($integerIDs);
else
	rsort($integerIDs);
for($x = 0; $x < $arrlength; $x++) {
    echo $integerIDs[$x];
    echo "<br>";
}
}
//echo exec("whoami");
/*$myfile = fopen("files/newfile.txt", "w") or die("Unable to open file!");
$str="This is written in file by PHP\n";
fwrite($myfile, $str);
fclose($myfile);
$myfile = fopen("files/newfile.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("files/newfile.txt"));
fclose($myfile);*/
?>
</body>
</html>

