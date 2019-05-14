<?php
include '../src/php/BigFileUploader.php';

echo json_encode(BigFileUploader::save('/home/www/downloads'));
?>
