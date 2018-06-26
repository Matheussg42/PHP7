<?php

$link = "https://www.google.com.br/logos/doodles/2018/world-cup-2018-day-13-4949947639136256-5645478960037888-ssw.png";
$content = file_get_contents($link);

$parse = parse_url($link);
$basename = basename($parse["path"]);

$file = fopen($basename, "w+");
fwrite($file, $content);

fclose($file);

?>

<img src="<?= $basename?>">