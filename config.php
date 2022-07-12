<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";
if (isset($_POST['submit'])) {
    $conn = mysqli_connect($server, $username, $password, $dbname);
    if ($conn == true) {
        if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['phone']) && !empty($_POST['gender']) && !empty($_POST['password']) && !empty($_POST['cPassword'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $gender = $_POST['gender'];
            $password = $_POST['password'];
            $cPassword = $_POST['cPassword'];
            if ($cPassword == $password) {
                $query = "insert into register(name,email,phone,gender,password) VALUES ('$name','$email','$phone','$gender','$password')";
                $run = mysqli_query($conn, $query);
                if ($run) {
                  header('location:hotel.php');
                } else {
                    echo "error comes";
                }
            }
             else {
                echo "password is not equal to conform password";
            }
        }
        else{
            echo "error1";
        }
    }
}
