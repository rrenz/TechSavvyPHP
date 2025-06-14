<!DOCTYPE html>
<html>
<head>
    <title>Server-Side Processing Example</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .container { max-width: 600px; margin: auto; padding: 20px; border: 1px solid #ccc; border-radius: 8px; }
        label, input[type="submit"] { display: block; margin-bottom: 10px; }
        input[type="text"] { width: 100%; padding: 8px; box-sizing: border-box; }
        .message { background-color: #e6ffe6; border: 1px solid #66cc66; padding: 10px; margin-top: 20px; border-radius: 5px; }
    </style>
</head>
<body>

    <div class="container">
        <h2>Enter Your Name</h2>

        <form method="post" action="process_form.php">
            <label for="userName">Name:</label>
            <input type="text" id="userName" name="userName" >
            <input type="submit" value="Submit">
        </form>
    </div>

</body>
</html>