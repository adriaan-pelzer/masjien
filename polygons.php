<?php
header ('Content-type: image/png');

$w = isset ($_GET['w'])?$_GET['w']:1024;
$h = isset ($_GET['h'])?$_GET['h']:768;
$s = 0;

$img = imagecreatetruecolor ($w, $h);

for ($i = 0; $i < 250; $i += 10) {
    $grey[$i] = imagecolorallocate($img, $i, $i, $i);
}

$white = imagecolorallocate($img, 255, 255, 255);

imagefill ($img, 0, 0, $black[0]);

for ($i = 0; $i < 40; $i++) {
    if ($i == 0) {
        $point[$i][0]["x"] = rand ($s, $w-$s);
        $point[$i][0]["y"] = rand ($s, $h-$s);
        $point[$i][1]["x"] = rand ($s, $w-$s);
        $point[$i][1]["y"] = rand ($s, $h-$s);
    } else {
        $point[$i][0]["x"] = $point[$i-1][1]["x"];
        $point[$i][0]["y"] = $point[$i-1][1]["y"];
        $point[$i][1]["x"] = $point[$i-1][2]["x"];
        $point[$i][1]["y"] = $point[$i-1][2]["y"];
    }
    $point[$i][2]["x"] = rand ($s, $w-$s);
    $point[$i][2]["y"] = rand ($s, $h-$s);

    imagefilledpolygon ($img, array ($point[$i][0]["x"], $point[$i][0]["y"], $point[$i][1]["x"], $point[$i][1]["y"], $point[$i][2]["x"], $point[$i][2]["y"]), 3, $grey[10 * (int) rand (1, 25)]);
}

imagepng ($img);
imagedestroy ($img);
?>
