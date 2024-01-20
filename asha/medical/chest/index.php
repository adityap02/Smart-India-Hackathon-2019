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

    



        <div    >
        <label> <? echo getMessage("q1")?> </label>
        <br>
        <br><label><input type="checkbox" name="q1[]" value="Coughing"><span></span><? echo getMessage("c3")?>  </label>
        <label><input type="checkbox" name="q1[]" value="Difficulty breathing"><span></span><? echo getMessage("db")?></label>
        <label><input type="checkbox" name="q1[]" value="Anxiety"><span></span><? echo getMessage("a")?></label>
        <br><br><label><input type="checkbox" name="q1[]" value="wheezing when breathing"><span></span><? echo getMessage("wsb")?> </label>
        <label><input type="checkbox" name="q1[]" value="Chest tightness"><span></span><? echo getMessage("ct")?></label>
            <br><label><input type="checkbox" name="q1[]" value="Wheezing"><span></span><? echo getMessage("wh")?>  </label>
            <br><br><label><input type="checkbox" name="q1[]" value="Blueness of the lips"><span></span><? echo getMessage("bl")?> </label>
            <label><input type="checkbox" name="q1[]" value="Chronic cough with phlegm"><span></span><? echo getMessage("cc")?></label>
            <br><br><label><input type="checkbox" name="q1[]" value=" Frequent respiratory infections"><span></span><? echo getMessage("fri")?></label>
            <label><input type="checkbox" name="q1[]" value="Weight loss"><span></span><? echo getMessage("wl")?></label>
            <br><label><input type="checkbox" name="q1[]" value="tenderness"><span></span><? echo getMessage("td")?> </label>
            <label><input type="checkbox" name="q1[]" value="swelling"><span></span><? echo getMessage("sw")?> </label>
            <label><input type="checkbox" name="q1[]" value="bruising"><span></span> <? echo getMessage("brs")?></label>
            <br><label><input type="checkbox" name="q1[]" value="chest pain"><span></span><? echo getMessage("cp1")?></label>
            <label><input type="checkbox" name="q1[]" value="difficulty breathing"><span></span><? echo getMessage("db")?></label>
            <br><label><input type="checkbox" name="q1[]" value="feeling sick or weak"><span></span><? echo getMessage("fsw")?> </label>
            <br><br><label><input type="checkbox" name="q1[]" value="loss of appetite and weight "><span></span><? echo getMessage("law")?> </label>
            <label><input type="checkbox" name="q1[]" value="fever and night sweats"><span></span> <? echo getMessage("fns")?></label>
            <br><br><label><input type="checkbox" name="q1[]" value="chest pain"><span></span><? echo getMessage("cp1")?></label>
            <br><br><label><input type="checkbox" name="q1[]" value="a severe cough that lasts for 3 weeks or more"><span></span><? echo getMessage("asc")?></label>
            <br><label><input type="checkbox" name="q1[]" value="feeling sick or weak"><span></span><? echo getMessage("fsw")?> </label>
            <br><br><label><input type="checkbox" name="q1[]" value="loss of appetite and weight "><span></span><? echo getMessage("law")?> </label>
            <label><input type="checkbox" name="q1[]" value="fever and night sweats"><span></span> <? echo getMessage("fns")?></label>
            <br><br><label><input type="checkbox" name="q1[]" value="chest pain"><span></span><? echo getMessage("cp1")?></label>
            <br><br><label><input type="checkbox" name="q1[]" value="a severe cough that lasts for 3 weeks or more"><span></span><? echo getMessage("asc")?></label>
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