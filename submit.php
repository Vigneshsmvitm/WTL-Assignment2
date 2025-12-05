<!DOCTYPE html>
<html>
<head>
    <title>Registration Success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
    <h1>Registration Successful!</h1>

    <h3>Submitted Details</h3>

    <p><strong>Name:</strong> <?php echo $_POST["name"]; ?></p>
    <p><strong>Email:</strong> <?php echo $_POST["email"]; ?></p>
    <p><strong>Phone:</strong> <?php echo $_POST["phone"]; ?></p>
    <p><strong>Course:</strong> <?php echo $_POST["course"]; ?></p>
    <p><strong>Address:</strong> <?php echo $_POST["address"]; ?></p>

</div>

</body>
</html>
