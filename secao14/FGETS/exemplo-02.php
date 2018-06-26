<?php

$filename = "logo.png";

$base64 = base64_encode(file_get_contents($filename));

$fileinfo = new finfo(FILEINFO_MIME_TYPE);

$mimetype = $fileinfo->file($filename);

//echo "data:image/png;base64," . $base64;
//echo "data:" . $mimetype . ";base64," . $base64;
$base64encode = "data:" . $mimetype . ";base64," . $base64;
?>

<a href="<?= $base64encode?>" target="_blank">Link para a Imagem</a>
<img src="<?= $base64encode?>" />