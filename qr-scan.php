<?php
include '_header.php';
?>


<section class="container " style="height: auto !important;">
    <h2 class="text-center mb-4">QR Scanner with file just drag and drop or select your file
    </h2>
    <div class="row">
        <div class="wrapper-u ">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="container-u">
                        <h1 class="uploadh1">Upload a file</h1>
                        <div class="upload-container">
                            <div class="border-container">
                                <div class="icons fa-4x">
                                    <i class="fas fa-file-image"
                                        data-fa-transform="shrink-3 down-2 left-6 rotate--45"></i>
                                    <i class="fas fa-file-alt" data-fa-transform="shrink-2 up-4"></i>
                                    <i class="fas fa-file-pdf"
                                        data-fa-transform="shrink-3 down-2 right-6 rotate-45"></i>
                                </div>
                                <!--<input type="file" id="file-upload">-->
                                <span id="selected-file-name"></span>
                                <p>select Qr Code Image
                                    <label for="file-post" class="btn btn-primary">browse
                                        your computer.</label>
                                    <input type="file" name="imagepost" id="file-post"  onchange="displayFileName(this)" >
                                </p>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12 marginTop" style="
    display: inline-flex;
    justify-content: space-evenly;
    flex-direction: column-reverse;
    
">
                    <label for="content" style="width:100%;">
                        <textarea class="form-control" id="textToCopy" rows="11">
                Result will be here. 
            </textarea>
                        <button class="btn btn-primary round-circle" onclick="copyTextToClipboard()" style="color: black;">
                            Copy
                        </button>

                    </label>
                 
                </div>
            </div>


        </div>
    </div>







</section>

<script src="https://cdn.jsdelivr.net/npm/jsqr@1.0.0/dist/jsQR.js"></script>
<script>
  function copyTextToClipboard() {
  // Get the textarea element
  const textarea = document.getElementById("textToCopy");

  // Get the text from the textarea
  const textToCopy = textarea.value;

  // Select the text in the textarea
  textarea.select();
  textarea.setSelectionRange(0, textToCopy.length);

  // Copy the selected text to the clipboard
  document.execCommand("copy");

  // Deselect the text (optional)
  textarea.setSelectionRange(0, 0);
}

// extract filename 
function displayFileName(input) {
        var fileNameDisplay = document.getElementById('selected-file-name');
        
        if (input.files.length > 0) {
            fileNameDisplay.textContent = 'Selected file: ' + input.files[0].name;
        } else {
            fileNameDisplay.textContent = '';
        }
    }


// extract qr code content 
document.getElementById("file-post").addEventListener("change", function (event) {
        const fileInput = event.target;
        const file = fileInput.files[0];

        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                const image = new Image();
                image.src = e.target.result;

                image.onload = function () {
                    const canvas = document.createElement("canvas");
                    canvas.width = image.width;
                    canvas.height = image.height;

                    const context = canvas.getContext("2d");
                    context.drawImage(image, 0, 0);

                    const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
                    const code = jsQR(imageData.data, imageData.width, imageData.height);

                    if (code) {
                        document.getElementById("textToCopy").value = code.data;
                    } else {
                        alert("No QR code found in the image.");
                    }
                };
            };
            reader.readAsDataURL(file);
        }
    });

    </script>


<?php
include '_footer.php';
?>