<?php
$uploadDir = "recordings/";

if (!file_exists($uploadDir)) {
    mkdir($uploadDir, 0777, true);
}

if ($_FILES["audio"]["error"] == UPLOAD_ERR_OK) {
    $tmpName = $_FILES["audio"]["tmp_name"];
    $fileName = $uploadDir . uniqid("audio_", true) . ".webm";
    move_uploaded_file($tmpName, $fileName);
    echo "Audio saved successfully: " . basename($fileName);
} else {
    echo "Error uploading file.";
}
?>
