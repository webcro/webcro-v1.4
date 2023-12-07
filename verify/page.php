<?php
// File to check
$jsonFilePath = 'file.json'; // Assuming your JSON file is named 'file.json'

// Function to read and decode the JSON file
function readJsonFile($jsonFilePath) {
    if (file_exists($jsonFilePath)) {
        $jsonContents = file_get_contents($jsonFilePath);
        $data = json_decode($jsonContents, true); // Decode to associative array
        return $data;
    } else {
        return [];
    }
}
?>
