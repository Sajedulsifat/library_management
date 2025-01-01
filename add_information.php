<?php
include 'db_connection.php';

if (isset($_POST['Sign_Up'])) {
    $FName = mysqli_real_escape_string($con, $_POST["FName"]);
    $LName = mysqli_real_escape_string($con, $_POST["LName"]);
    $Name = $FName . " " . $LName;
    $Email = mysqli_real_escape_string($con, $_POST["Email"]);
    $password = password_hash($_POST["Passwords"], PASSWORD_BCRYPT); // Secure password hash
    $Date_Of_Birth = mysqli_real_escape_string($con, $_POST["Date_Of_Birth"]);
    $Address = mysqli_real_escape_string($con, $_POST["Address"]);
    $Phone_Number = mysqli_real_escape_string($con, $_POST["Phone_Number"]);
    $Membership_date = mysqli_real_escape_string($con, $_POST["Membership_date"]);

    $sql_operation = "INSERT INTO readers (Name, FName, LName, Email, Passwords, Phone_Number, Date_Of_Birth, Address, Membership_date)
                      VALUES ('$Name', '$FName', '$LName', '$Email', '$password', '$Phone_Number', '$Date_Of_Birth', '$Address', '$Membership_date')";

    if (mysqli_query($con, $sql_operation)) {
        echo "Welcome our New memberg";
    } else {
        die("Try agian " . mysqli_error($con));
    }
}
?>
