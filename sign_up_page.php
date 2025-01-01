<?php include 'db_connection.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="sign_up.css">
    <title>Sign Up</title>
</head>
<body>
    <form action="add_information.php" method="POST">
        <label for="fName">First Name:
            <input type="text" name="FName" required>
        </label><br>
        <label for="LName">Last Name:
            <input type="text" name="LName" required>
        </label><br>
        <label for="Email">Email:
            <input type="email" name="Email" required>
        </label><br>
        <label for="Passwords">Password:
            <input type="password" name="Passwords" required>
        </label><br>
        <label for="Date_Of_Birth">Date of Birth:
            <input type="date" name="Date_Of_Birth" required>
        </label><br>
        <label for="Address">Address:
            <input type="text" name="Address" required>
        </label><br>
        <label for="Phone_Number">Phone Number:
            <input type="text" name="Phone_Number" required>
        </label><br>
        <label for="Membership_date">Membership Date:
            <input type="date" name="Membership_date" required>
        </label><br>
        <input type="submit" name="Sign_Up" value="Sign Up">
    </form>
</body>
</html>
