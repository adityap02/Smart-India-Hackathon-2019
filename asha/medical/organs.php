<?php
session_start();

if (isset($_SESSION['login_user_type']) && isset($_SESSION['login_user']) && $_SESSION['login_user_type']=='asha'){
    require_once "../../messages.php" ;
}
else{
    header('location:index.php');
}
?><!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
<body>
<br>
<ul>
    <li ><a style="float:left"><font color="white"> <?php echo "Welcome " . $_SESSION['login_user_name']; ?><font></font> </a></li>
    <li><a href="../../index.php"style="float:left">Home</a></li>
    <li><a class="active" href="organs.php"style="float:left">Symptoms Registration</a></li>
    <li><a href="../logout.php" style="float:right">Logout</a></li>
    <li><a href="../userlist/userreg.php"style="float:left">Patient Registration Registration</a></li>
</ul>

<br>
<h1 align="center">ORGANS LIST</h1><br>


<div class="card-deck">

    <div class="card">
        <a href="head" class="card-link"><img src="img/11.jpg" class="card-img-top" alt="Head"></a>
        <div class="card-body">
            <h3 align="center"> <a href="head" class="card-link"><? echo getMessage("head")?></a></h3>
        </div>
    </div>


    <div class="card">
        <a href="neck" class="card-link"><img src="img/22.jpg" class="card-img-top" alt="Neck"></a>
        <div class="card-body">
            <h3 align="center"> <a href="neck" class="card-link"><? echo getMessage("neck")?></a></h3>
        </div>
    </div>

    <div class="card">
        <a href="chest" class="card-link"><img src="img/33.jpg" class="card-img-top" alt="Chest"></a>
        <div class="card-body">
            <h3 align="center"> <a href="chest" class="card-link"><? echo getMessage("chest")?></a></h3>
        </div>
    </div>

    <div class="card">
        <a href="abdomen" class="card-link"><img src="img/44.jpg" class="card-img-top" alt="Abdomen">
        <div class="card-body">
            <h3 align="center"> <a href="abdomen" class="card-link"><? echo getMessage("abdomen")?></a></h3>
        </div>
    </div>


</div>
<br>

<div class="card-deck">
    <div class="card">
        <a href="thigh" class="card-link"><img src="img/55.jpg" class="card-img-top" alt="Thigh"></a>
        <div class="card-body">
        <br>    <h3 align="center"> <a href="thigh" class="card-link"><? echo getMessage("thigh")?></a></h3>
        </div>
    </div>
    <div class="card">
        <a href="knee" class="card-link"><img src="img/66.jpg" class="card-img-top" alt="Doclist"></a>
        <div class="card-body">
         <br> <h3 align="center"> <a href="knee" class="card-link"><?echo getMessage("knee")?></a></h3>
        </div>
    </div>
    <div class="card">
        <a href="foot" class="card-link"><img src="img/foot.jpg" class="card-img-top" alt="Doclist"></a>
           <br>     <div class="card-body">
          <h3 align="center"> <a href="foot" class="card-link"><?echo getMessage("foot")?></a></h3>
        </div>
    </div>
    <div class="card">
        <a href="so" class="card-link">  <img src="img/88.jpg" class="card-img-top" alt="Doclist"></a>
        <div class="card-body">
         <h3 align="center">  <a href="so" class="card-link"><?echo getMessage("sexual organ")?></a></h3>
        </div>
    </div>

</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>