<?php
session_start();

if (isset($_SESSION['login_user_type']) && isset($_SESSION['login_user']) && $_SESSION['login_user_type']=='asha'){

    require_once "../../../messages.php";
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
<h1 align="center"><? echo getMessage("nav31")?></h1>

<div id="demo">
    <form class="form-horizontal" id="form_members" role="form" action="submit.php" method="POST">
    <div class="field-wrap">
        <label>
            <? echo getMessage("userid")?> <span class="req">*</span>
        </label>
        <input type="text" id="user_id" name="user_id" required autocomplete="off" />
    </div>

    <hr style="border-top: 2px dotted black"/>
    <label><input type="radio" name="sor" value="male"><span></span> Male</label>
    <label><input type="radio" name="sor" value="female"><span></span>Female</label>



        <div class="conditional" data-cond-option="sor" data-cond-value="male">
        <label> <? echo getMessage("q1")?> </label>
        <br>
        <br><label><input type="checkbox" name="q1[]" value="Discharge from the penis"><span></span><? echo getMessage("dfp")?>  </label>
        <label><input type="checkbox" name="q1[]" value="Painful urination"><span></span><? echo getMessage("pu")?></label>
        <br><br><label><input type="checkbox" name="q1[]" value="Itching or irritation inside the penis "><span></span><? echo getMessage("ip")?> </label>
        <label><input type="checkbox" name="q1[]" value="Dark urine"><span></span><? echo getMessage("du")?></label>
            <label><input type="checkbox" name="q1[]" value="Lower abdominal pain"><span></span><? echo getMessage("lap")?></label><label><input type="checkbox" name="q1[]" value="Lower abdominal pain"><span></span><? echo getMessage("lap")?></label>
            <label><input type="checkbox" name="q1[]" value="Pain during sexual intercourse"><span></span><? echo getMessage("pi")?></label>
            <label><input type="checkbox" name="q1[]" value=" blisters in the genital area"><span></span><? echo getMessage("big")?></label>
            <label><input type="checkbox" name="q1[]" value="Painful ejaculation"><span></span><? echo getMessage("pej")?></label>
        <br>
        <br>
        <hr style="border-top: 2px dotted black"/>
        <br>
        <label><? echo getMessage("q2")?></label>
            <br>
            <br><label><input type="radio" name="q2" value=" Less than 1 day"><span></span> <? echo getMessage("lt")?>&ensp;</label>
            <label><input type="radio" name="q2" value="2-3 days "><span></span> <? echo getMessage("d")?></label>
            <br><label><input type="radio" name="q2" value="A Week"><span></span> <? echo getMessage("aw")?></label>
            <label><input type="radio" name="q2" value="More than a Week"><span> </span><? echo getMessage("mt")?></label>
            <br>
            <br>
            <hr style="border-top: 2px dotted black"/>
            <br>
            <label><? echo getMessage("q3")?></label>
            <br>
            <br><label><input type="radio" name="q3" value="mild"><span></span><? echo getMessage("m")?> &ensp;</label>
            <label><input type="radio" name="q3" value="moderate"><span></span><? echo getMessage("m1")?></label>
            <label><input type="radio" name="q3" value="severe"><span></span><? echo getMessage("s")?></label>
        <hr style="border-top: 2px dotted black"/>
        <br>
        <br>
            <p>
            <label><? echo getMessage("aai")?></label>
            <input type="text" id="additional" name="additional">
            </p>
        </div>






<div class="conditional" data-cond-option="sor" data-cond-value="female">
        <label> <? echo getMessage("q1")?> </label>
        <br>
        <br><label><input type="checkbox" name="q1[]" value="Vaginal discharge "><span></span><? echo getMessage("vd")?>  </label>
        <label><input type="checkbox" name="q1[]" value="Painful urination"><span></span><? echo getMessage("pu")?> </label>
        <label><input type="checkbox" name="q1[]" value="Vaginal itching"><span></span><? echo getMessage("vi")?></label>
        <br><br><label><input type="checkbox" name="q1[]" value="Dark urine"><span></span><? echo getMessage("du")?></label>
        <label><input type="checkbox" name="q1[]" value="Painful urination"><span></span><? echo getMessage("pu")?></label>
        <label><input type="checkbox" name="q1[]" value="Heavy menstrual bleeding"><span></span> <? echo getMessage("hmb")?></label>
    <label><input type="checkbox" name="q1[]" value="Strong vaginal odor"><span></span> <? echo getMessage("svo")?></label>
    <label><input type="checkbox" name="q1[]" value="Pain during sexual intercourse"><span></span><? echo getMessage("pi")?></label>
    <label><input type="checkbox" name="q1[]" value=" blisters in the genital area"><span></span><? echo getMessage("big")?></label>
        <br>
        <br>
        <hr style="border-top: 2px dotted black"/>
        <br>
        <label><? echo getMessage("q2")?></label>
    <br>
    <br><label><input type="radio" name="q2" value=" Less than 1 day"><span></span> <? echo getMessage("lt")?>&ensp;</label>
    <label><input type="radio" name="q2" value="2-3 days "><span></span> <? echo getMessage("d")?></label>
    <br><label><input type="radio" name="q2" value="A Week"><span></span> <? echo getMessage("aw")?></label>
    <label><input type="radio" name="q2" value="More than a Week"><span> </span><? echo getMessage("mt")?></label>
    <br>
    <br>
    <hr style="border-top: 2px dotted black"/>
    <br>
    <label><? echo getMessage("q3")?></label>
    <br>
    <br><label><input type="radio" name="q3" value="mild"><span></span><? echo getMessage("m")?> &ensp;</label>
    <label><input type="radio" name="q3" value="moderate"><span></span><? echo getMessage("m1")?></label>
    <label><input type="radio" name="q3" value="severe"><span></span><? echo getMessage("s")?></label>
        <hr style="border-top: 2px dotted black"/>
        <br>
    <p>
        <label> <? echo getMessage("aai")?></label>
        <input type="text" id="additional" name="additional">
    </p>
</div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="button button2" name="submit" id="submit"><? echo getMessage("submit")?></button>
            </div>
        </div>



    </form>
</body>
</html>