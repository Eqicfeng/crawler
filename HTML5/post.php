<?php
header("Content-type:text/html;charset=utf-8"); 
$con = mysql_connect("localhost","root","");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
 
mysql_select_db("test", $con);

$sql = mysql_query("SELECT * FROM keywords WHERE keyword='$_POST[keyword]'");
$datarow = mysql_num_rows($sql);
if($datarow==0)
{
    mysql_query("INSERT INTO keywords VALUES ('$_POST[keyword]')");
    die("Sorry, there is no data now, please check again later.");
} 
mysql_close($con)
?>
<?php  header("location:new.php?keyword=".$_POST[keyword])?>