<?php

$inputDirPath = './src'; 
$outputDirPath = './pages';

$headerContent = file_get_contents('./src/header.php');
$footerContent = file_get_contents('./src/footer.php');

// Get all PHP files in the input directory
$phpFiles = glob($inputDirPath . '/*.php');

foreach ($phpFiles as $file) {
    // Skip the header.php and footer.php files
    if (basename($file) === 'header.php' || basename($file) === 'footer.php') {
        continue;
    }

    $fileContent = file_get_contents($file);
    $modifiedContent = $headerContent . $fileContent . $footerContent;

    // Change the file extension to .html and save to the output directory
    $outputFile = $outputDirPath . '/' . basename($file, '.php') . '.html';
    file_put_contents($outputFile, $modifiedContent);
}

echo "HTML files have been generated in the output directory.";

?>

