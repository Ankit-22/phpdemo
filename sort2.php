<!DOCTYPE html>
<html>
<head><title>Sort</title></head>
<body>
<form action="sort2.php" method="post">
  Enter the keys:<br>
  <input type="text" name="numbers"><br>
  Enter the corresponding values:<br>
  <input type="text" name="values">
  <input type="submit" name="sort"  value="Sort"><input type="submit" name="asort" value="Asort"><button type = "button" onclick="window.location.href='sort.php'">For Single Values</button><br>
</form> 
<?php
if(isset($_POST['sort'])||isset($_POST['asort']))
{
echo "The sorted array is:<br>";
$numbers = $_POST['numbers'];
$values = $_POST['values'];
$integerIDs = array_map('intval', explode(' ', $numbers));
$integerValues = array_map('intval', explode(' ', $values));
$arrlength = count($integerIDs);
$arr=array();
for($x = 0; $x < $arrlength; $x++) {
    $arr[$integerIDs[$x]]=$integerValues[$x];
}
if(isset($_POST['sort']))
	asort($arr);
else
	arsort($arr);
echo $arr[5];
foreach($arr as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
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
