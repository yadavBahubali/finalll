<?php
include '_header.php';
?>
<section>
    <div class="container">
        <div class="container-fluid">
            <div class="row text-dark">
                <div class="col-lg-8 col-12">
                    <div class="card sh" style="background-color:rgb(227 242 253) !important;">
                        <div class="card-header" style="background-color:rgb(227 242 253) !important;">
                            <h1 class="mb-0">QR Code Generator</h1>
                        </div>
                        <div class="card-body" style="display: flex;flex-direction: row;align-content: flex-end;flex-wrap: nowrap;justify-content: space-evenly;align-items: center;">
                            <span class="input-group-text" style="background-color:#f0b803!important; display:flex; justify-content:center; max-width:40%!important;">
                                <img src="images/qr-gen.jpg" class="img-fluid qr-gen " alt="Image">
                            </span>
                            <form>
                                <div class="form-group">
                                    <label for="weburl">Website or Page URL</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">

                                        </div>
                                        <input type="text" class="form-control" id="text" name="weburl" placeholder="https://www.yoursite.com">
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer" style="background-color:rgb(227 242 253) !important;">
                            <button id="saveButton" class="btn btn-primary btn-lg w-100 mt-2 mb-2 submit-qr-code" type="button">Save QR Code<i class="icon-right-arrow font-16 ml-2"></i></button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-12">
                    <div class="container">
                        <div class="container-fluid">

                            <div class="card qr-card" style="flex-wrap: wrap;align-content: space-around !important;">
                                <div class="card-body">
                                    <!-- No need for a form or input here -->
                                    <div id="qrcode" class="qr-code"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</section>




<?php
include '_footer.php';
?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js">
</script>
<script>
    const qrcode = new QRCode(document.getElementById("qrcode"));

    // Attach an input event handler to the text input
    $("#text").on("input", function(e) {
        const textValue = e.target.value.trim();
        qrcode.makeCode(textValue);
    });

    // Attach a click event handler to the "Save" button
    $("#saveButton").click(function() {
        const canvas = document.querySelector("#qrcode canvas");
        const qrCodeDataURL = canvas.toDataURL("image/jpg");
        const downloadLink = document.createElement("a");
        downloadLink.href = qrCodeDataURL;
        downloadLink.download = "qrcode.png"; // Set the file name here
        downloadLink.click();
    });

    // Initial QR code generation
    const initialTextValue = $("#text").val().trim();
    qrcode.makeCode(initialTextValue);
</script>