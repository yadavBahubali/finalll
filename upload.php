

<?php
require 'vendor/autoload.php'; // Include the Composer autoloader

use chillerlan\QRCode\QRCode;
use chillerlan\QRCode\QROptions;
// Database connection parameters
$host = "localhost";
$username = "root";
$password = "";
$database = "template";

// Create a connection to the database
$connection = new mysqli($host, $username, $password, $database);

// Check the connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Function to validate URLs
function validateURL($url) {
    return filter_var($url, FILTER_VALIDATE_URL) !== false;
}

$uploadOk = true;
$targetDirectory = "uploads/";
$profileImageFile = "";
$logoImageFile = "";
$post1ImageFile = "";

// Function to validate image files
function validateImage($file, $allowedFormats, $maxFileSize) {
    $imageFileType = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));

    // Check if the uploaded file is a valid image
    $check = getimagesize($file["tmp_name"]);
    if ($check === false) {
        echo "Invalid image file.";
        return false;
    }

    // Check file size
    if ($file["size"] > $maxFileSize) {
        echo "File is too large.";
        return false;
    }

    // Allow certain file formats
    if (!in_array($imageFileType, $allowedFormats)) {
        echo "Only JPG, JPEG, PNG, and GIF files are allowed.";
        return false;
    }

    return true;
}

// Profile Image Upload Handling
if (isset($_FILES["Profile"])) {
    if (validateImage($_FILES["Profile"], ["jpg", "jpeg",], 5000000)) {
        $profileImageFile = $targetDirectory . basename($_FILES["Profile"]["name"]);
        if (move_uploaded_file($_FILES["Profile"]["tmp_name"], $profileImageFile)) {
            // File uploaded successfully, store the file path in the database
            $profileImagePath = $profileImageFile;
        } else {
            echo "Sorry, there was an error uploading your Profile Image.";
            $uploadOk = false;
        }
    } else {
        $uploadOk = false;
    }
}

// Logo Image Upload Handling
if (isset($_FILES["Logo"])) {
    if (validateImage($_FILES["Logo"], [ "png"], 5000000)) {
        $logoImageFile = $targetDirectory . basename($_FILES["Logo"]["name"]);
        if (move_uploaded_file($_FILES["Logo"]["tmp_name"], $logoImageFile)) {
            // File uploaded successfully, store the file path in the database
            $logoImagePath = $logoImageFile;
        } else {
            echo "Sorry, there was an error uploading your Logo Image.";
            $uploadOk = false;
        }
    } else {
        $uploadOk = false;
    }
}

// Post-1 Image Upload Handling
if (isset($_FILES["imagepost"])) {
    if (validateImage($_FILES["imagepost"], ["jpg", "jpeg", "png", "gif"], 5000000)) {
        $post1ImageFile = $targetDirectory . basename($_FILES["imagepost"]["name"]);
        if (move_uploaded_file($_FILES["imagepost"]["tmp_name"], $post1ImageFile)) {
            // File uploaded successfully, store the file path in the database
            $post1ImagePath = $post1ImageFile;
        } else {
            echo "Sorry, there was an error uploading your Post-1 Image.";
            $uploadOk = false;
        }
    } else {
        $uploadOk = false;
    }
}

// ...

// Retrieve and sanitize user input
$name = mysqli_real_escape_string($connection, $_POST['name']);
$designation = mysqli_real_escape_string($connection, $_POST['Designation']);
$company_name = mysqli_real_escape_string($connection, $_POST['CompanyName']);
$email_icon = mysqli_real_escape_string($connection, $_POST['emailicon']);
$call_icon = mysqli_real_escape_string($connection, $_POST['callicon']);
$message_icon = mysqli_real_escape_string($connection, $_POST['messageicon']);
$email = mysqli_real_escape_string($connection, $_POST['Email']);
$phone = mysqli_real_escape_string($connection, $_POST['phone']);
$address1 = mysqli_real_escape_string($connection, $_POST['Address1']);
$address2 = mysqli_real_escape_string($connection, $_POST['Address2']);
$city = mysqli_real_escape_string($connection, $_POST['city']);
$country = mysqli_real_escape_string($connection, $_POST['country']);
$zip = mysqli_real_escape_string($connection, $_POST['zip']);
$state = mysqli_real_escape_string($connection, $_POST['state']);
$action = mysqli_real_escape_string($connection, $_POST['action']);
$google = mysqli_real_escape_string($connection, $_POST['google']);
$title = mysqli_real_escape_string($connection, $_POST['title']);
$url = mysqli_real_escape_string($connection, $_POST['URL']);
// $video_link = mysqli_real_escape_string($connection, $_POST['videolink']);
$instagram_link = mysqli_real_escape_string($connection, $_POST['instagram']);
$facebook = mysqli_real_escape_string($connection, $_POST['facebook']);
$twitter_link = mysqli_real_escape_string($connection, $_POST['twitter']);
$linkedin_link = mysqli_real_escape_string($connection, $_POST['linkedin']);

// Check URL format
if (!validateURL($url)) {
    echo "Invalid URL format for the website.";
    $uploadOk = false;
}

// Handle image uploads and database insertion if uploadOk is true
if ($uploadOk) {
    $sql = "INSERT INTO register (
        name, Designation, CompanyName, emailicon, callicon, messageicon,
        Email, phone, Address1, Address2, city, country, zip,
        action, google, title, URL,  instagram,
        facebook, twitter, linkedln, state, Profile, Logo, imagepost
    ) VALUES (
        '$name', '$designation', '$company_name', '$email_icon', '$call_icon', '$message_icon',
        '$email', '$phone', '$address1', '$address2', '$city', '$country', '$zip',
        '$action', '$google', '$title', '$url',  '$instagram_link',
        '$facebook', '$twitter_link', '$linkedin_link', '$state', '$profileImageFile ', '$logoImageFile', '$post1ImageFile'
    )";

    if ($connection->query($sql) === TRUE) {
        $last_id = $connection->insert_id;

        // Construct a link with the generated ID
        $linkWithId = "http://localhost/views/output.php?id=" . $last_id;

        // Generate a QR code with the link containing the ID
        $options = new QROptions([
            'outputType' => QRCode::OUTPUT_IMAGE_JPG,
            'eccLevel' => QRCode::ECC_L,
        ]);

        $qrcode = new QRCode($options);
        $qrcode->render($linkWithId, 'qrcodes/user_data_qr_' . $last_id . '.jpg'); // Change the file path as needed

        // Store the QR code file path in the database
        $qrCodeImagePath = 'qrcodes/user_data_qr_' . $last_id . '.jpg';
        $updateQrCodeSql = "UPDATE register SET QRCodeImage = '$qrCodeImagePath' WHERE ID = '$last_id'";
        $connection->query($updateQrCodeSql);
        
        // echo "Registration successful. QR code generated and stored in the database with ID: $last_id";
        header( "refresh:1;url=ShowQr.php");  
    } else {
        echo "Error: " . $sql . "<br>" . $connection->error;
    }
}
?>
