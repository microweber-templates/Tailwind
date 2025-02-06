<?php

$key = 'mountains';
$restApi = 'http://imglib.microweberapi.com/index.php?search=' . $key;
$json = file_get_contents($restApi);
$data = json_decode($json, true);
if (!$data) {
    print 'No images found';
    return;
}

$maxImages = 20;
$i= 0;
foreach ($data['photos'] as $photo) {
    // Download the image
    $url = 'http://imglib.microweberapi.com/download.php?photo_id=' . $photo['id'];
    $image = file_get_contents($url);
    $filename = 'gallery-' . $photo['id'] . '.jpg';
    file_put_contents($filename, $image);

    if ($i >= $maxImages) {
        break;
    }
    $i++;
}
