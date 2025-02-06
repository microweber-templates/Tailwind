<?php
// Get all jpg files in the current directory


$folders = [];
$scan = scandir(__DIR__);
foreach ($scan as $file) {
    if ($file === '.' || $file === '..') {
        continue;
    }
    if (is_dir($file)) {
        $folders[] = $file;
    }
}

foreach ($folders as $folder) {

    $files = glob($folder ."/*.jpg");
    $counter = 1;

// Sort files to ensure consistent ordering
    sort($files);

// Rename each jpg file
    foreach ($files as $file) {
        $newName = $folder."/gallery-".$counter.".jpg";

        // Only rename if the file exists and it's not already renamed
        if (file_exists($file) && $file !== $newName) {
            rename($file, $newName);
            echo "Renamed: $file -> $newName\n";
        }

        $counter++;
    }

    echo "Renaming complete!\n";

}
