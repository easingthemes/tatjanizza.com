<?php
$zip = new ZipArchive;
if ($zip->open("wordpress-4.7.2.zip")){
$path = getcwd() . "/platform_wp";
$path = str_replace("\\","/",$path);
echo $path;
echo $zip->extractTo($path);
$zip->close();
echo 'Done.';
} else {
echo "Error";
}
?>