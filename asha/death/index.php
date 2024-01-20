<?php
session_start();


if (isset($_SESSION['login_user_type']) && isset($_SESSION['login_user']) && $_SESSION['login_user_type']=='asha'){

    require_once "../../messages.php";

}

else{
    header('location:../index.php');
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Sign-Up/Login Form</title>
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">


    <style>
        ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: #333;
        }


        li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        li a:hover {
            background-color: #111;
        }
        .active {
            background-color: #4CAF50;
        }

    </style>

</head>

<body><br>

<ul>
    <li ><a style="float:left"><font color="white"><?php echo "Welcome " . $_SESSION['login_user_name']; ?> </font></a></li>
    <li><a href="../index.php"  style="float:left"><? echo getMessage("nav1")?></a></li>
    <li><a href="../medical/organs.php"style="float:left"><? echo getMessage("nav2")?> </a></li>
    <li><a href="../logout.php" style="float:right"><? echo getMessage("nav3")?></a></li>
    <li><a href="../userlist/userreg.php"style="float:left"><? echo getMessage("nav4")?> </a></li>
    <li><a class="active" href="index.php"style="float:left">Death Registration </a></li>
</ul>
<div class="container">

    <br>
    <h1><? echo getMessage("dreg")?></h1>
    <br>

    <form class="form-horizontal" id="form_members" role="form" action="submit.php" method="POST">


        <div class="form-group">
            <label for="userid" class="col-sm-2"> <? echo getMessage("userid")?> </label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="userid" id="userid" >
            </div>
            <label for="reason" class="col-sm-2"> <? echo getMessage("rod")?> </label>
            <div class="col-sm-4">
                <input type="text" class="form-control" name="reason" id="reason" >
            </div>
        </div>
        <div class="form-group">
                  <label for="dod" class="col-sm-2"><? echo getMessage("dod")?></label>
            <div class="col-sm-4">
                <input type="date" class="form-control" name="dod" id="dod" placeholder="mm/dd/yyyy">
            </div>
        </div>


        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-warning" name="submit" id="submit"><? echo getMessage("submit")?></button>
            </div>
        </div>
    </form>
</div>
</body>
</html>
