<?php
mysql_connect("localhost","simonee","") or die(mysql_error());
mysql_select_db("images") or die(mysql_error());;

$id = addslashes($_REQUEST["id"]);

$image = mysql_query("SELECT * FROM imageupload WHERE id=$id");
$image = mysql_fetch_assoc($image);
$image = $image["image"];

header("Content-type: image/jpeg");

echo $image

?>