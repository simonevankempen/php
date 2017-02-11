
<?php

$myfile= fopen("newfile.txt", "a") or die("Unable to open file");
$txt =" you are going to die";
fwrite($myfile, $txt);
fclose($myfile);

?>