<?php

session_start();
if (isset($_SESSION['login_user_type']) && isset($_SESSION['login_user']) && $_SESSION['login_user_type']=='doctor'){
$link = mysqli_connect("localhost","root","root")  or die("failed to connect to server !!");
mysqli_select_db($link,"sih");

if(isset($_REQUEST['submit']))
{
    $errorMessage = "";
    $disease=$_POST['disease'];
    $remark=$_POST['remark'];
    $docid=$_SESSION['login_user_regid_doc'];
    $regid_user=$_SESSION['uid'];
    $date=$_SESSION['date'];
    $lab=$_POST['chbk'];

// Validation will be added here

    if ($errorMessage != "" ) {
        echo "<p class='message'>" .$errorMessage. "</p>" ;
    }
    else{
        $con=mysqli_connect('localhost','root','root','sih');
        $query = "SELECT * FROM `medical_update` WHERE regid_user='$regid_user' and date='$date'";
        $run=mysqli_query($con,$query);



        if(mysqli_num_rows($run)==0)
        {
            echo mysqli_num_rows($run);
            $query="INSERT INTO `sih`.`medical_update`
            (`Disease`,`remark`,`docid`,`regid_user`,`date`,`lab`) VALUES ('$disease', '$remark','$docid','$regid_user','$date','$lab')";
            $run=mysqli_query($con,$query);
            echo "<h1 align='center'>submitted</h1>";
            header("refresh:1;url=../index.php");
        }
        else
        {
            $query="UPDATE `medical_update` SET `Disease`='$disease',`remark`='$remark'";
            $run=mysqli_query($con,$query);
            echo "<h1 align='center'>submitted</h1>";
            header("refresh:1;url=../index.php");

        }

        mysqli_query($link,$insqDbtb) or die(mysqli_error($link));






    }
}

}
else{
    header('location:../index.php');
}

?>