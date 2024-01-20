<?php

session_start();

if (isset($_SESSION['login_user_type']) && isset($_SESSION['login_user']) && $_SESSION['login_user_type']=='asha'){

    $link = mysqli_connect("localhost","root","root")  or die("failed to connect to server !!");
    mysqli_select_db($link,"sih");
    if(isset($_REQUEST['submit']))
    {
        $q1 = implode(',', $_POST['q1']);
        $q2 = $_POST["q2"];
        $q3 = $_POST["q3"];
        $organ = 'neck';
        $user_id=$_POST['user_id'];
        $asha_id=$_SESSION['login_user'];
        $additional = $_POST['additional'];
        $date = date('Y/m/d');
// Validation will be added here

        if ($errorMessage != "" ) {
            echo "<p class='message'>" .$errorMessage. "</p>" ;
        }
        else{
//Inserting record in table using INSERT query
            $insqDbtb="INSERT INTO medical (symptoms,duration,intensity,regid_user,organ,ashaid,additional_info,Date) VALUES ('$q1', '$q2', '$q3','$user_id','$organ','$asha_id','$additional','$date')";

            mysqli_query($link,$insqDbtb) or die(mysqli_error($link));
            echo "<h1 align='center'>Submitted</h1>";
            header("refresh:2;url=../organs.php");
        }
    }

}
else{
    header('location:../index.php');
}

?>