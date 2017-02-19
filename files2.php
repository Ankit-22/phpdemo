<!DOCTYPE html>
<html>
<head><title>Super Global</title></head>
<body>
<form action="files2.php" method="post">
  Enter the filename to open:<br>
  <input type="text" name="filename" required><input name ="submit" type="submit" value="OK"><br>
</form>
<?php
if(isset($_POST['submit']))
{
$filename="files/".$_POST['filename'];
$myfile = fopen($filename, "r") or die("Unable to open file!");
echo "The contents in the file are..<br>";
echo fread($myfile,filesize($filename));
fclose($myfile);
}
?>
</body>
</html>
