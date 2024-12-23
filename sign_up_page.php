<?php include 'db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="add_information.php" method="POST">
        <label for="name">First name 
            <input type="text" name="name" required>
        </label><br>
        <label for="name">Last name
            <input type="text" name="name" required>
        </label><br>
        <label for="email">Email
            <input type="email" name="email" required>
        </label><br>
        <label for="password">Password
            <input type="password" name="password" required>
        </label><br>
        <label for="date of birth">Date of birth
            <input type="date" name="date of birth" required>
        </label><br>
        <label for="Address">Address
            <input type="text" name="Address" required>
        </label><br>
        <label for="Phone number">Phone Number
            <input type="text" name="Phone number" required>
        </label><br>
        <label for="mebership date">membership_date
            <input type="date" name="membership_date" required>
        </label><br>
    </form>
   
</body>
</html>