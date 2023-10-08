<?php
include '_header.php';
?>

<section>
    <div class="container">
        <div class="container-fluid">
            <div class="table-responsive">
                <table class="table">
                    <thead class="bg-light">
                        <tr>

                            <th id="hd" scope="col">ID</th>
                            <th id="hd" scope="col">Name</th>
                            <th id="hd" scope="col">Qr</th>
                            <th id="hd" scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody class="bg-light">
                        <?php
                        $host = "localhost";
                        $username = "root";
                        $password = "";
                        $database = "template";

                        // Create a connection to the database
                        $connection = new mysqli($host, $username, $password, $database);

                        // Check the connection
                        
                        // Assuming you have a valid database connection
                        $sql = "SELECT id, name, QRCodeImage FROM register"; // Replace 'your_table_name' with the actual table name
                        $result = mysqli_query($connection, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row['id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['name']; ?>
                                    </td>
                                    <td><img src="<?php echo $row['QRCodeImage']; ?>" alt="QR Code"></td>
                                    <td>
                                        <a class="btn btn-success "
                                            href="download.php?image=<?php echo urlencode($row['QRCodeImage']); ?>"
                                            download>Download</a>
                                    </td>

                                </tr>
                                <?php
                            }
                        } else {
                            ?>
                            <tr>
                                <td colspan="4">No data Found</td>
                            </tr>
                            <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>
















<?php
include '_footer.php';
?>