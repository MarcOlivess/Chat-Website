<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Website</title>
</head>
<body>
    <div>
        <textarea name="textBox" cols="200" rows="50" readOnly="True"><?php include "update_text.php"?></textarea>
    </div>  
    <form action="./send_message_to_file.php" method="POST">
        <label for="message">Message:</label>
        <input type="text" name="message" id="message">
        <input type="submit">
    </form>
</body>
</html>