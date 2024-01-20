<?php

session_start();

if (isset($_SESSION['login_user_type']) && isset($_SESSION['login_user']) && $_SESSION['login_user_type']=='asha'){
    echo "Welcome " . $_SESSION['login_user_name'];



$link = mysqli_connect("localhost","root","root")  or die("failed to connect to server !!");
mysqli_select_db($link,"sih");
if(isset($_REQUEST['submit']))
{
    $q1 = implode(',', $_POST['q1']);
    $q2 = $_POST["q2"];
    $q3 = $_POST["q3"];
    $organ = 'Head';
    $problem = $_POST['head'];
    $user_id=$_POST['user_id'];
    $additional = $_POST['additional'];
    $asha_id=$_SESSION['login_user'];

// Validation will be added here

    if ($errorMessage != "Error 404" ) {
        echo "<p class='message'>" .$errorMessage. "</p>" ;
    }
    else{
//Inserting record in table using INSERT query
        $insqDbtb="INSERT INTO medical (symptoms,duration,intensity,regid_user,organ,problem,ashaid,additional_info) VALUES ('$q1', '$q2', '$q3','$user_id','$organ','$problem','$asha_id','$additional')";

        mysqli_query($link,$insqDbtb) or die(mysqli_error($link));

        echo "Submitted";

    }
}

}
else{
    header('location:../index.php');
}

?>