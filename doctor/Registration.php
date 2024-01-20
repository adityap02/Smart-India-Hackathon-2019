<?php



require_once('dbconnect.php');
$regid_doc = $_POST['regid_doc'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];


echo "<br>";


$my_query = "";


$my_query = "select * from doctor where email = '$email' ";

$result = mysqli_query($connection, $my_query);

if(mysqli_num_rows($result) > 0)
{
    echo "Sorry! This email already exists. Please choose a different email.";
    
}

else
    
{
    
    $my_query = "INSERT INTO doctor (regid_doc, fname, lname, email, pwd) VALUES ('$regid_doc', '$fname', '$lname', '$email', '$pwd' )";
    
    echo "<br>";
    
    $result = mysqli_query($connection, $my_query);
    
    if($result)
    {
        echo  "Doctor Registered";
        
    }
    
    else
    {
        echo "<b>ERROR: unable to post </b>";
        
    }
    
    
}

//mysqli_close();

?>