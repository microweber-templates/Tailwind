<?php
// Get all jpg files in the current directory
$files = glob("*.jpg");
$counter = 1;

// Sort files to ensure consistent ordering
sort($files);

// Rename each jpg file
foreach ($files as $file) {
    $newName = "gallery-1-" . $counter . ".jpg";

    // Only rename if the file exists and it's not already renamed
    if (file_exists($file) && $file !== $newName) {
        rename($file, $newName);
        echo "Renamed: $file -> $newName\n";
    }

    $counter++;
}

echo "Renaming complete!\n";
