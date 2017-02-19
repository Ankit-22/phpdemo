<!DOCTYPE html>
<html>
<head><title>Super Global</title></head>
<body>
<form action="files.php" method="post">
  Enter the filename:<br>
  <input type="text" name="filename" required><br>
  Enter the contents to write:<br>
  <input type="text" name="content" required><input name ="submit" type="submit" value="OK"><br>
</form>
<?php
if(isset($_POST['submit']))
{
$filename="files/".$_POST['filename'];
$myfile = fopen($filename, "w") or die("Unable to open file!");
$str=$_POST['content'];
fwrite($myfile, $str);
fclose($myfile);
echo "The file was created. Please visit the open tab.";
}
?>
</body>
</html>
