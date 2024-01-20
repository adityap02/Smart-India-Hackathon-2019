<?php


require_once('dbconnect.php');


$email = $_POST['email'];
$pwd = $_POST['pwd'];


echo "<br>";


$my_query = "";


$my_query = "select * from doctor where email = '$email' and pwd = '$pwd'";

$result = mysqli_query($connection, $my_query);

if(mysqli_num_rows($result) > 0)
{

    session_start();
    $row = mysqli_fetch_assoc($result);
    $_SESSION['login_user']= $row['docid'];  // Initializing Session with value of PHP Variable
    $_SESSION['login_user_type']= "doctor";  // Initializing Session with value of PHP Variable
    $_SESSION['login_user_name']= $row['fname'];
    $_SESSION['login_user_regid_doc']=$row['regid_doc'];
    header('location:welcome.php');
    $_SESSION['login_user']= $email;  // Initializing Session with value of PHP Variable
    echo $_SESSION['login_user'];

    header('location:welcome.php');


}
else
{
    
    echo "Invalid email / password";
}
