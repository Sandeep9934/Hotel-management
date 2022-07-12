<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";
$conn = mysqli_connect($server, $username, $password, $dbname);
if (isset($_POST['submit'])) {
    $email=$_POST['email'];
    $password=$_POST['password'];
    $stmt=$conn->prepare("select * from register where email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt_result=$stmt->get_result();
    if ($stmt_result->num_rows>0) {
        $data=$stmt_result->fetch_assoc();
        if ($data['password']==$password) {
            $_SESSION['email']=$email;
            header("location:hotel.php");
        } else {
            echo"password did not match";
        }
    }
    else{
        echo"email did not match";
    }
}
else{
    echo"connection failed";
}
?>