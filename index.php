<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php

$dir_path = ['MyDocuments/','MyDocuments/teaching', 'MyDocuments/resear/', "MyDocuments/teaching/105/", 'MyDocuments/teaching/103/'];


for ($j = 0; $j < count($dir_path); $j++) {
$scan = scandir($dir_path[$j]);

for ($i = 2; $i < count($scan); $i++) {
    $fileName = $scan[$i];
    $format = substr($fileName, stripos($fileName, "."));

    if ($format == '.jpg' or $format == '.png' or $format == '.jpeg' or $format == '.gif') //  avelacreq cer uzac format ev inqa gtni
    {

        print_r("<img src=" . $dir_path[$j] . '/' . $scan[$i] . ">");
    }

}
}
?>
</body>
</html>