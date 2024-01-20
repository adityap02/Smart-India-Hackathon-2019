<?php


require_once('dbconnect.php');


$email = $_POST['email'];
$pwd = $_POST['pwd'];



echo "<br>";


$my_query = "";


$my_query = "select * from asha where email = '$email' and pwd = '$pwd'";

$result = mysqli_query($connection, $my_query);

if(mysqli_num_rows($result) > 0)
{

    session_start();
    $row = mysqli_fetch_assoc($result);
    $_SESSION['login_user']= $row['ashaid'];  // Initializing Session with value of PHP Variable
    $_SESSION['login_user_type']= "asha";  // Initializing Session with value of PHP Variable
    $_SESSION['login_user_name']= $row['fname'];
    $_SESSION['login_user_regid_asha']=$row['regid_asha'];
    header('location:welcome.php');




}
else
{
    
    echo "Invalid email / password";
}
