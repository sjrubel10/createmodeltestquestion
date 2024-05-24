<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Input Form</title>
</head>
<body>
<h2>Enter your email address</h2>
<form action="send.php" method="post">
    <label for="email">Receiver Email:</label>
    <input type="email" id="email" name="email" required>
    <br>
    <label for="subject">Email Subject:</label>
    <input type="text" id="subject" name="subject" required>
    <br>
    <label for="body">Email Body:</label>
    <input type="text" id="emailBody" name="emailBody" required>
    <br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
