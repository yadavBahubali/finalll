<?php
if (isset($_POST['convert'])) {
    // Check if a file was uploaded
    if (!empty($_FILES['file']['tmp_name'])) {
        // Define the output file name and path
        $outputFile = 'output.png';

        // Get the uploaded file and its original name
        $sourceFile = $_FILES['file']['tmp_name'];
        $originalFileName = $_FILES['file']['name'];

        // Determine the desired output format based on the user's choice
        $outputFormat = $_POST['convert'];

        // Load the source image
        $sourceImage = file_get_contents($sourceFile);

        if ($sourceImage) {
            // Create an image resource from the source image
            $image = imagecreatefromstring($sourceImage);

            if ($image !== false) {
                // Define the output image format and quality
                $outputQuality = 90; // Adjust as needed

                // Save the image with the desired format
                if ($outputFormat == 'jpg') {
                    $outputFile = 'output.jpg';
                    imagejpeg($image, $outputFile, $outputQuality);
                } elseif ($outputFormat == 'png') {
                    $outputFile = 'output.png';
                    imagepng($image, $outputFile);
                }

                // Free up memory
                imagedestroy($image);

                // Provide a download link for the converted image
                header('Content-Disposition: attachment; filename=' . $outputFile);
                readfile($outputFile);
                exit();
            } else {
                echo "Failed to create image resource.";
            }
        } else {
            echo "Failed to load the image.";
        }
    } else {
        echo "Please select a file to convert.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Image Converter</title>
</head>
<body>
    <h1>Image Converter</h1>
    <form method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <label for="convert">Convert to:</label>
        <select name="convert" id="convert">
            <option value="png">PNG</option>
            <option value="jpg">JPG</option>
        </select>
        <input type="submit" value="Convert and Download">
    </form>
</body>
</html>
