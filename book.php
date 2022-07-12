<?php
session_start();
$server = "localhost";
$username = "root";
$password = "";
$dbname = "hotel";
$connect = mysqli_connect($server, $username, $password, $dbname);
        if(isset($_POST['submit'])){
            if(!empty($_POST['name'])&&!empty($_POST['email'])&&!empty($_POST['phone'])&&!empty($_POST['branch'])&&!empty($_POST['in'])&&!empty($_POST['out'])&&!empty($_POST['room'])&&!empty($_POST['guest'])){
                $name=$_POST['name'];
                $email=$_POST['email'];
                $phone=$_POST['phone'];
                $branch=$_POST['branch'];
                $checkin=$_POST['in'];
                $checkout=$_POST['out'];
                $room=$_POST['room'];
                $guest=$_POST['guest'];
              $query="insert into room(name,email,phone,branch,checkin,checkout,room,guest) VALUES('$name','$email','$phone','$branch','$checkin','$checkout','$room','$guest')";
              $run = mysqli_query($connect,$query);
              if($run){
                echo"successfully booked your room";
              }
              else{
                echo"something went wrong";
              }
            }
        }
?>
