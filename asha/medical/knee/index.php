<?php
session_start();

if (isset($_SESSION['login_user_type']) && isset($_SESSION['login_user']) && $_SESSION['login_user_type']=='asha'){
include_once "../../../messages.php";
}
else{
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="styles.css">
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="test.js"></script>

    <script src="https://code.jquery.com/jquery-2.2.4.js"
            integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI="
            crossorigin="anonymous"></script>

    <script src="conditionize.jquery.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.conditional').conditionize();
        });
    </script>

    <style>
        .button {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 16px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            -webkit-transition-duration: 0.4s; /* Safari */
            transition-duration: 0.4s;
            cursor: pointer;
        }
        .button2:hover {
            background-color: #008CBA;
            color: white;

        }
    </style>
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
    <li ><a style="float:left"><?php echo "Welcome " . $_SESSION['login_user_name']; ?> </a></li>
    <li><a href="../../index.php"style="float:left"><? echo getMessage("nav1")?></a></li>
    <li><a class="active" href="../organs.php"style="float:left"><? echo getMessage("nav2")?></a></li>
    <li><a href="../../logout.php" style="float:right"><? echo getMessage("nav3")?></a></li>
    <li><a href="../../userlist/userreg.php"style="float:left"><? echo getMessage("nav4")?></a></li>
</ul>

<br>
<br>
<h1 align="center"><? echo getMessage("nav31")?> </h1>

<div id="demo">
    <form class="form-horizontal" id="form_members" role="form" action="submit.php" method="POST">
    <div class="field-wrap">
        <label>
            <? echo getMessage("userid")?>  <span class="req">*</span>
        </label>
        <input type="text" id="user_id" name="user_id" required autocomplete="off" />
    </div>


    <hr style="border-top: 2px dotted black"/>
            <div>
        <label> <? echo getMessage("q1")?> </label>
        <br>
        <br><label><input type="checkbox" name="q1[]" value="Inflammation"><span></span><? echo getMessage("inf")?>  </label>
        <label><input type="checkbox" name="q1[]" value="Swelling of the joint lining"><span></span><? echo getMessage("sjl")?></label>
        <br><br><label><input type="checkbox" name="q1[]" value="Soft tissue destruction "><span></span><? echo getMessage("std")?> </label>
        <label><input type="checkbox" name="q1[]" value="Bone destruction"><span></span><? echo getMessage("bdt")?></label>
        <br><br><label><input type="checkbox" name="q1[]" value="Loss of motion in the knee"><span></span><? echo getMessage("lm")?></label>
        <label><input type="checkbox" name="q1[]" value="Fever, energy loss, and anemia"><span></span><? echo getMessage("fea")?></label>
                <br><label><input type="checkbox" name="q1[]" value="Deep, aching joint pain or stiffness"><span></span><? echo getMessage("daj")?>  </label>
                <br><br><label><input type="checkbox" name="q1[]" value="Minor injury may cause significant pain"><span></span><? echo getMessage("mjs")?> </label>
                <label><input type="checkbox" name="q1[]" value="Night pain"><span></span><? echo getMessage("np")?></label>
                <br><br><label><input type="checkbox" name="q1[]" value="Limited range of motion and catching of the knee"><span></span><? echo getMessage("lrm")?></label>
                <label><input type="checkbox" name="q1[]" value="Swelling or deformity in the joint"><span></span><? echo getMessage("sd")?></label>
            <br>
            <br>
            <hr style="border-top: 2px dotted black"/>
            <br>
            <label><? echo getMessage("q2")?></label>
            <br>
            <br><label><input type="radio" name="q2" value=" Less than 1 day"><span></span> <? echo getMessage("lt")?>&ensp;</label>
            <label><input type="radio" name="q2" value="2-3 days "><span></span> <? echo getMessage("d")?></label>
            <br><label><input type="radio" name="q2" value="A Week"><span></span> <? echo getMessage("aw")?></label>
            <label><input type="radio" name="q2" value="More than a Week "><span></span><? echo getMessage("mt")?></label>
            <br>
            <br>
            <hr style="border-top: 2px dotted black"/>
            <br>
            <label><? echo getMessage("q3")?></label>
            <br>
            <br><label><input type="radio" name="q3" value="Mild "><span></span><? echo getMessage("m")?> &ensp;</label>
            <label><input type="radio" name="q3" value="Moderate"><span></span><? echo getMessage("m1")?></label>
            <label><input type="radio" name="q3" value="Severe"><span></span><? echo getMessage("s")?></label>

            <hr style="border-top: 2px dotted black"/>
            <br>
            <br>

                <label><? echo getMessage("aai")?></label>
                <input type="text" id="additional" name="additional">

</div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="button button2" name="submit" id="submit"><? echo getMessage("submit")?></button>
            </div>
        </div>



    </form>
</body>
</html>