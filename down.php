<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "template";

// Create a connection to the database
$connection = new mysqli($host, $username, $password, $database);

// Check for a successful connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// SQL query to retrieve data from the "register" table
$sql = "SELECT name, Email, CompanyName, Address1, phone, callicon, URL, Designation FROM register";
$result = $connection->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        // Create a vCard (VCF) string
        $vcard = "BEGIN:VCARD\n";
        $vcard .= "VERSION:3.0\n";
        $vcard .= "FN:" . $row['name'] . "\n"; // Full Name
        $vcard .= "EMAIL:" . $row['Email'] . "\n";
        $vcard .= "ORG:" . $row['CompanyName'] . "\n";
        $vcard .= "ADR:" . $row['Address1'] . "\n";
        $vcard .= "TEL:" . $row['phone'] . "\n";
        $vcard .= "TEL:" . $row['callicon'] . "\n";
        $vcard .= "URL:" . $row['URL'] . "\n";
        $vcard .= "TITLE:" . $row['Designation'] . "\n";
        $vcard .= "END:VCARD\n";

        // Generate a unique filename based on the name
        $filename = strtolower(str_replace(" ", "_", $row['name'])) . ".vcf";

        // Set the appropriate headers for download
        header('Content-Type: text/vcard');
        header('Content-Disposition: attachment; filename="' . $filename . '"');

        // Output the vCard content for download
        echo $vcard;
    }
} else {
    echo "No records found";
}

// Close the database connection
$connection->close();
?>

