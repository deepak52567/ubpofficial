<?php
include 'config.php';
$dir = 'img/gallery/';
// $files = array_diff(scandir($dir), array('..', '.'));
// print_r($files);
foreach (new DirectoryIterator($dir) as $file) {
    if ($file->isDot()) continue;

    if ($file->isDir()) {
        print $file->getFilename() . '<br />';
    }
}
?>
