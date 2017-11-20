<?php
include 'config.php';
$dir = 'img/gallery/Jhoothe Wadein/';
// $files = array_diff(scandir($dir), array('..', '.'));
// print_r($files);
foreach (new DirectoryIterator($dir) as $file) {
    if ($file->isDot()) continue;
    print $file->getFilename() . '<br />';
}
?>
