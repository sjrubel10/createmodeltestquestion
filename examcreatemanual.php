<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Model Test Question Creation</title>
    <link rel="stylesheet" href="styles.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!--    <script src="script.js"></script>-->
</head>
<body>
<div class="container">
    <h1>Model Test Question Creation</h1>
    <form id="questionForm" action="" method="post">
        <div class="section">
            <h2>Exam Title</h2>
            <input type="text" name="exam_title" id="exam_title" placeholder="Enter Exam Title" required>
            <textarea name="exam_description" id="exam_description" placeholder="Enter Exam Description" required></textarea>
        </div>
        <div class="section">
            <h2>Description</h2>
            <div class="flex-container">
                <div class="flex-item">
                    <label for="is_model_test">Is Model Test</label>
                    <select name="is_model_test" id="is_model_test">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="flex-item">
                    <label for="select_time">Select Time</label>
                    <select name="select_time" id="select_time">
                        <option value="30">30 minutes</option>
                        <option value="60">1 hour</option>
                        <option value="90">1.5 hours</option>
                        <option value="120">2 hours</option>
                    </select>
                </div>
                <div class="flex-item">
                    <label for="negative_marking">Negative Marking</label>
                    <select name="negative_marking" id="negative_marking">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="flex-item">
                    <label for="select_privacy">Select Privacy</label>
                    <select name="select_privacy" id="select_privacy">
                        <option value="public">Public</option>
                        <option value="private">Private</option>
                    </select>
                </div>
                <div class="flex-item">
                    <label for="auto_disable">Auto Disable</label>
                    <select name="auto_disable" id="auto_disable">
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                    </select>
                </div>
                <div class="flex-item">
                    <label for="selecttime">Select Time</label>
                    <select name="selecttime" id="selecttime">
                        <option value="day">Day</option>
                        <option value="night">Night</option>
                    </select>
                </div>
                <div class="flex-item">
                    <label for="exam_year">Exam Year</label>
                    <select name="exam_year" id="exam_year">
                        <option value="2024">2024</option>
                        <option value="2023">2023</option>
                        <option value="2022">2022</option>
                        <option value="2021">2021</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="section">
            <h2>Questions</h2>
            <textarea name="questions" id="questions" placeholder="Enter your questions here" required></textarea>
        </div>
        <div class="section">
            <h2>Upload Image</h2>
            <input type="file" name="image_upload" id="image_upload" accept="image/*">
        </div>
        <button type="button" id="submitBtn">Submit</button>
    </form>
    <div id="result"></div>
</div>
</body>
</html>

<script>
    $(document).ready(function() {
            $('#submitBtn').click(function() {
                // Form data collection
                const formData = new FormData();
                formData.append('exam_title', $('#exam_title').val());
                formData.append('exam_description', $('#exam_description').val());
                formData.append('is_model_test', $('#is_model_test').val());
                formData.append('select_time', $('#select_time').val());
                formData.append('negative_marking', $('#negative_marking').val());
                formData.append('select_privacy', $('#select_privacy').val());
                formData.append('auto_disable', $('#auto_disable').val());
                formData.append('selecttime', $('#selecttime').val());
                formData.append('exam_year', $('#exam_year').val());
                let questions = $('#questions').val();
                formData.append('questions', '"'+questions+'"' );
                const imageUpload = $('#image_upload')[0].files[0];
                if (imageUpload) {
                    formData.append('image_upload', imageUpload);
                }
                // Ajax request
                $.ajax({
                    url: 'jscreatequestionmanual.php', // Change this to your server-side PHP file
                    type: 'POST',
                    data: formData,
                    processData: false,
                    contentType: false,
                    success: function( response ) {
                        let result = JSON.parse(response);
                        console.log( result );
                        // $('#result').html(`<pre>${JSON.stringify(response, null, 2)}</pre>`);
                    },
                    error: function(xhr, status, error) {
                        $('#result').html(`<p>Error: ${error}</p>`);
                    }
                });
            });

    });

</script>
