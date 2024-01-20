<?php
session_start();


if (isset($_SESSION['login_user_type']) && isset($_SESSION['login_user']) && $_SESSION['login_user_type']=='asha'){
    echo "Welcome " . $_SESSION['login_user_name'];
    require_once "../../../messages.php";

}

else{
    header('location:../index.php');
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

</head>
<body>

<h1 align="center">Patient Symptomps Registration</h1>

<div id="demo">
    <form class="form-horizontal" id="form_members" role="form" action="submit.php" method="POST">
    <div class="field-wrap">
        <label>
            User ID<span class="req">*</span>
        </label>
        <input type="text" id="user_id" name="user_id" required autocomplete="off" />
    </div>




    <hr style="border-top: 2px dotted black"/>
    <label><input type="radio" name="head" value="headache"><span></span> Headache</label>
    <label><input type="radio" name="head" value="dizziness"><span></span> Dizziness</label>
    <label><input type="radio" name="head" value="head injury"><span></span>  Head Injury</label>





    <div class="conditional" data-cond-option="head" data-cond-value="headache1">
        <label>1. Do you have any of the following symptoms?</label>
        <br>
        <br><label><input type="checkbox" name="q1[]" value="Oversensitivity to light,sound,or smells"><span></span> Oversensitivity to light,sound,or smells </label>
        <label><input type="checkbox" name="q1[]" value="Blurred Vision"><span></span> Blurred Vision</label>
        <br><br><label><input type="checkbox" name="q1[]" value="Illusion of surrounding being bigger or smaller they actually are "><span></span>Illusion of surrounding being bigger or smaller they actually are </label>
        <label><input type="checkbox" name="q1[]" value="Vomiting"><span></span> Vomiting</label>
        <br><br><label><input type="checkbox" name="q1[]" value="Feeling weak and tired"><span></span> Feeling weak and tired</label>
        <label><input type="checkbox" name="q1[]" value="Feeling sick"><span></span> Feeling sick</label>
        <label><input type="checkbox" name="q1[]" value="Fatigue"><span></span> Fatigue</label>
        <br>
        <br>
        <hr style="border-top: 2px dotted black"/>
        <br>
        <label>2. How long you have your headache?</label>
        <br>
        <br><label><input type="radio" name="q2" value="q1a"><span></span>Less than 1 day &ensp;</label>
        <label><input type="radio" name="q2" value="q1b"><span></span>2-3 days</label>
        <br><label><input type="radio" name="q2" value="q1c"><span></span>A Week</label>
        <label><input type="radio" name="q2" value="q1d"><span></span>More than a Week</label>
        <br>
        <br>
        <hr style="border-top: 2px dotted black"/>
        <br>
        <label>3. What is the Intensity?</label>
        <br>
        <br><label><input type="radio" name="q3" value="q1a"><span></span>Mild &ensp;</label>
        <label><input type="radio" name="q3" value="q1b"><span></span>Moderate</label>
        <label><input type="radio" name="q3" value="q1c"><span></span>Severe</label>

        <hr style="border-top: 2px dotted black"/>
        <br>
        <br>
        <textarea rows="5" cols="16" class="form" id="additional" name="additional" placeholder="Any Additional Information"></textarea>
</div>



        <div class="conditional" data-cond-option="head" data-cond-value="headache">
        <label> <? echo getMessage("q1")?> </label>
        <br>

            <label><input type="checkbox" name="q1[]" value="Oversensitivity to light,sound,or smells"><span> </span><? echo getMessage("osm")?></span></label>
            <label><input type="checkbox" name="q1[]" value="Blurred Vision"><span></span><? echo getMessage("bv")?></label>
        <br>
            <label><input type="checkbox" name="q1[]" value="Illusion of surrounding being bigger or smaller they actually are "><span></span><? echo getMessage("is")?> </label>
            <label><input type="checkbox" name="q1[]" value="Vomiting"><span></span> <? echo getMessage("v")?></label>
        <br><label><input type="checkbox" name="q1[]" value="Feeling weak and tired"><span></span><? echo getMessage("fw")?></label>
        <label><input type="checkbox" name="q1[]" value="Feeling sick"><span></span><? echo getMessage("fs")?></label>
        <label><input type="checkbox" name="q1[]" value="Fatigue"><span></span> <? echo getMessage("f")?></label>
        <br>
        <br>
        <hr style="border-top: 2px dotted black"/>
        <br>
        <label><? echo getMessage("q2")?></label>
        <br>
        <br><label><input type="radio" name="q2" value="q1a"><span></span> <? echo getMessage("lt")?> &ensp;</label>
        <label><input type="radio" name="q2" value="q1b"><span></span> <? echo getMessage("d")?></label>
        <br><label><input type="radio" name="q2" value="q1c"><span></span> <? echo getMessage("aw")?></label>
        <label><input type="radio" name="q2" value="q1d"><span></span> <? echo getMessage("mt")?></label>
        <br>
        <br>
        <hr style="border-top: 2px dotted black"/>
        <br>
        <label><? echo getMessage("wt1")?></label>
        <br>
        <br><label><input type="radio" name="q3" value="q1a"><span></span><? echo getMessage("m")?> &ensp;</label>
        <label><input type="radio" name="q3" value="q1b"><span></span><? echo getMessage("m1")?></label>
        <label><input type="radio" name="q3" value="q1c"><span></span><? echo getMessage("s")?></label>

        <hr style="border-top: 2px dotted black"/>
        <br>
        <br>
        <textarea rows="5" cols="16" class="form" id="additional" name="additional" placeholder="Any Additional Information"></textarea>
</div>






<div class="conditional" data-cond-option="head" data-cond-value="dizziness">
        <label> <? echo getMessage("q1")?> </label>
        <br>
        <br><label><input type="checkbox" name="q1[]" value="Vertigo"><span><? echo getMessage("v1")?></span>  </label>
        <br><br><label><input type="checkbox" name="q1[]" value="Anxiety "><span></span><? echo getMessage("a")?> </label>
        <label><input type="checkbox" name="q1[]" value="Vomiting"><span></span> <? echo getMessage("v")?></label>
        <br><br><label><input type="checkbox" name="q1[]" value="Disequilibrium(Feeling unsteady)"><span></span><? echo getMessage("di")?></label>
        <label><input type="checkbox" name="q1[]" value="Ringing or buzzing in ears"><span></span><? echo getMessage("r")?></label>
        <label><input type="checkbox" name="q1[]" value="Nose bleeding"><span></span> <? echo getMessage("nb")?></label>
        <br>
        <br>
        <hr style="border-top: 2px dotted black"/>
        <br>
        <label><? echo getMessage("q2")?></label>
        <br>
        <br><label><input type="radio" name="q2" value="q1a"><span></span> <? echo getMessage("lt")?> &ensp;</label>
        <label><input type="radio" name="q2" value="q1b"><span></span> <? echo getMessage("d")?></label>
        <br><label><input type="radio" name="q2" value="q1c"><span></span> <? echo getMessage("aw")?></label>
        <label><input type="radio" name="q2" value="q1d"><span></span> <? echo getMessage("mt")?></label>
        <br>
        <br>
        <hr style="border-top: 2px dotted black"/>
        <br>
        <label><? echo getMessage("wt1")?></label>
        <br>
        <br><label><input type="radio" name="q3" value="q1a"><span></span><? echo getMessage("m")?> &ensp;</label>
        <label><input type="radio" name="q3" value="q1b"><span></span><? echo getMessage("m1")?></label>
        <label><input type="radio" name="q3" value="q1c"><span></span><? echo getMessage("s")?></label>

        <hr style="border-top: 2px dotted black"/>
        <br>
        <br>
        <textarea rows="5" cols="16" class="form" id="additional" name="additional" placeholder="Any Additional Information"></textarea>
</div>



<div class="conditional" data-cond-option="head" data-cond-value="Head Injury">
        <label> <? echo getMessage("q1")?> </label>
        <br>
        <br><label><input type="checkbox" name="q1[]" value="Persistent headache"><span><? echo getMessage("ph")?></span>  </label>
        <br><br><label><input type="checkbox" name="q1[]" value="Repeated vomiting"><span></span><? echo getMessage("rv")?> </label>
        <label><input type="checkbox" name="q1[]" value="Dilation of one or both pupils of the eyes"><span></span> <? echo getMessage("do")?></label>
        <br><br><label><input type="checkbox" name="q1[]" value="Clear fluids draining from the nose or ears"><span></span><? echo getMessage("cf")?></label>
        <label><input type="checkbox" name="q1[]" value="Difficulty  in sleeping"><span></span><? echo getMessage("ds")?></label>
        <label><input type="checkbox" name="q1[]" value="No loss of consciousness "><span></span> <? echo getMessage("nl")?></label>
        <br>
        <br>
        <hr style="border-top: 2px dotted black"/>
        <br>
        <label><? echo getMessage("q2")?></label>
        <br>
        <br><label><input type="radio" name="q2" value="q1a"><span></span> <? echo getMessage("lt")?> &ensp;</label>
        <label><input type="radio" name="q2" value="q1b"><span></span> <? echo getMessage("d")?></label>
        <br><label><input type="radio" name="q2" value="q1c"><span></span> <? echo getMessage("aw")?></label>
        <label><input type="radio" name="q2" value="q1d"><span></span> <? echo getMessage("mt")?></label>
        <br>
        <br>
        <hr style="border-top: 2px dotted black"/>
        <br>
        <label><? echo getMessage("wt1")?></label>
        <br>
        <br><label><input type="radio" name="q3" value="q1a"><span></span><? echo getMessage("m")?> &ensp;</label>
        <label><input type="radio" name="q3" value="q1b"><span></span><? echo getMessage("m1")?></label>
        <label><input type="radio" name="q3" value="q1c"><span></span><? echo getMessage("s")?></label>

        <hr style="border-top: 2px dotted black"/>
        <br>
        <br>
        <textarea rows="5" cols="16" class="form" id="additional" name="additional" placeholder="Any Additional Information"></textarea>
</div>










        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-warning" name="submit" id="submit">Submit</button>
            </div>
        </div>



    </form>
</body>
</html>