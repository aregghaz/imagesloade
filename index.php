<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<?php

$dirname = 'MyDocuments/';


function scan($dirname)
{
    if (is_dir($dirname)) {
        if ($dh = opendir($dirname)) {
            while (($file = readdir($dh)) !== false) {
                $filetype = filetype($dirname);
                if ($file !== '.' and $file !== '..') {
                    $fileName = $file;
                    if ($filetype === 'dir') {

                        scan($dirname . $file . '/');
                    }
                    $format = substr($fileName, stripos($fileName, "."));
                    if ($format == '.jpg' or $format == '.png' or $format == '.jpeg' or $format == '.gif') {
                        print_r("<ul><li><img src=" . $dirname . $fileName . ">".$file.'</li></ul>');
                    }
                }
            }
        }
        closedir($dh);
    }
}

scan($dirname);

die;


?>
</body>
</html>