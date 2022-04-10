<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/style.css" />
    <title>Classroom Scheduler</title>
</head>

<body>
    <nav class="navbar">
        <div class="left">
            <div id="logo">
                <h1> Marks Prediction </h1>
            </div>
        </div>
        <div class="right">

            <img src="../logo/Logo.jpg" alt="Logo not found">
            <h5><a href="pages/login.html"">LOGOUT</a></h5>
        </div>

    </nav>
    <div class="wrapper">


        <hr class="hr" />

        <div style="height:38rem">
            <h2>Prediction Results:
            <?php
            include("../api/simple_html_dom.php");
            $school= $sex=$age=$famsize=$address=$pstatus=
            $medu=$fedu=$mjob=$fjob=$reason=$guardian=$traveltime=$failures
            =$study=$schoolsup=$famsup=$paid=$activities=$nursery=
            $higher=$internet=$famrel=$freetime=$goout=$health=$absences
            =$g1=$g2="";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
             $school = ($_POST["school"]);
             $sex = ($_POST["sex"]);
             $age = ($_POST["age"]);
             $address = ($_POST["address"]);
             $famsize = ($_POST["famsize"]);
             $pstatus = ($_POST["pstatus"]);
             $medu = ($_POST["medu"]);
             $fedu = ($_POST["fedu"]);
             $mjob = ($_POST["mjob"]);
             $fjob = ($_POST["fjob"]);
             $reason = ($_POST["reason"]);
             $guardian = ($_POST["guardian"]);
             $traveltime = ($_POST["traveltime"]);
             $study = ($_POST["study"]);
             $failures = ($_POST["failures"]);
             $schoolsup = ($_POST["schoolsup"]);
             $famsup = ($_POST["famsup"]);
             $paid = ($_POST["paid"]);
             $activities = ($_POST["activities"]);
             $nursery = ($_POST["nursery"]);
             $higher = ($_POST["higher"]);
             $internet = ($_POST["internet"]);
             $famrel = ($_POST["famrel"]);
             $freetime = ($_POST["freetime"]);
             $goout = ($_POST["goout"]);
             $health=($_POST["health"]);
             $absences = ($_POST["absences"]);
             $g1 = ($_POST["g1"]);
             $g2 = ($_POST["g2"]);
            }

            $str = "https://markpredictor.herokuapp.com/?school=".$school."&sex=".$sex."&age=".$age."&address=".$address."&famsize=".$famsize."&Pstatus=".$pstatus."&Medu=".$medu."&Fedu=".$fedu."&Mjob=".$mjob."&Fjob=".$fjob."&reason=".$reason."&guardian=".$guardian."&traveltime=".$traveltime."&studytime=".$study."&failures=".$failures."&schoolsup=".$schoolsup."&famsup=".$famsup."&paid=".$paid."&activities=".$activities."&nursery=".$nursery."&higher=".$higher."&internet=".$internet."&famrel=".$famrel."&freetime=".$freetime."&goout=".$goout."&health=".$health."&absences=".$absences."&G1=".$g1."&G2=".$g2;
            // $html = file_get_html("https://markpredictor.herokuapp.com/?school=GP&sex=F&age=16&address=U&famsize=GT3&Pstatus=T&Medu=4&Fedu=4&Mjob=health&Fjob=other&reason=home&guardian=mother&traveltime=1&studytime=1&failures=0&schoolsup=no&famsup=yes&paid=no&activities=no&nursery=no&higher=yes&internet=yes&famrel=4&freetime=4&goout=4&health=2&absences=6&G1=17&G2=17");
            $html = file_get_html($str);
            $prediction = $html->innertext;
            $prediction= trim($prediction,'{"prediction":"');
            $prediction= trim($prediction,'"}');
            echo $prediction;
            ?>
            </h2>
        </div>
        <div style="display: inline-block;
        vertical-align: bottom;
        padding: 3px 5px;"><button class="btn btn-default"><a href=classstudents.html  title="">BACK</a></button></div>





        <div class="showNotes" id="notes"></div>
    </div>
</body>

</html>