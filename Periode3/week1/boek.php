<!DOCTYPE html>
<html>
<head>
<title>Mijn PHP-script</script>
</head>
<body>

<h3>php lab 01</h3>
<?php
$hoofdstad["DE"] = "Berlijn";
$hoofdstad["BE"] = "Brussel";
$hoofdstad["ES"] = "Madrid";
$hoofdstad["DK"] = "Kopenhagen";
$hoofdstad["FR"] = "Parijs";
$hoofdstad["GB"] = "London";
foreach($hoofdstad as $key => $value) {
    echo "$key hoofdstad is $value<br />";
}
?>



</body>
</html>