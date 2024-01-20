<?php

session_start();
if (isset($_SESSION['login_user_type']) && isset($_SESSION['login_user']) && $_SESSION['login_user_type']=='asha') {
     $link = mysqli_connect("localhost", "root", "root") or die("failed to connect to server !!");
    mysqli_select_db($link, "sih");
    if (isset($_REQUEST['submit'])) {
        $errorMessage = "";
        $id = $_POST['userid'];
        $reason = $_POST['reason'];
        $dod = $_POST['dod'];
        // Validation will be added here

        if ($errorMessage != "") {
            echo "<p class='message'>" . $errorMessage . "</p>";
        } else {

            $sql = "SELECT * FROM `userinfo` WHERE regid_user='$id'";
            $run = mysqli_query($link, $sql);
            $data=mysqli_fetch_assoc($run);
            $fname=$data['firstname'];
            $lname=$data['lastname'];
            $gender=$data['gender'];
            $dob=$data['dob'];

            $sql="INSERT INTO `death`(`regid_user`, `fname`, `lname`, `gender`, `dob`, `dod`, `reason`) VALUES ('$id','$fname','$lname','$gender','$dob','$dod','$reason')";
            $run=mysqli_query($link,$sql);


            $sql = "DELETE FROM `userinfo` WHERE regid_user='$id'";
            $run = mysqli_query($link, $sql);
            echo " <h1 align='center'>Death Registered</h1>";
            header("refresh:2;url=../index.php");
                }

            }




    } else {
        header('location:../index.php');
        }


?>