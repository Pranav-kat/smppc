<?php
 session_start();
 if(!isset($_SESSION['user']) || $_SESSION['user']!=true){
    header("location: login.php");
    exit;
 }
?>
<!doctype html>
<html>

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
                <h1> Course: CSE00XX </h1>
                <h2>Slot: A1 </h2>
            </div>
        </div>
        <div class="right"> <img src="../logo/Logo.jpg" alt="Logo not found"></div>
    </nav>
    <div class="wrapper">
        <h1 class="class">Total students: 65</h1>
        
        <form method="POST" action ="predictionpage.php" class="form">
            <div class="left wrapper">
                <label for="note-text" class="form"> School </label><br>
                <input type="text" id="note-text" name="school" class="form" placeholder="GP&"></input><br>
                <label for="note-text" class="form"> Sex </label><br>
                <input type="text" id="note-text" name="sex" class="form" placeholder="F"></input><br>
                <label for="note-text" class="form"> Age </label><br>
                <input type="number" id="note-text" name="age" class="form" placeholder="16"></input><br>
                <label for="note-text" class="form"> Address </label><br>
                <input type="text" id="note-text" class="form" name="address" placeholder="U&"></input><br>
                <label for="note-text" class="form"> Family-size </label><br>
                <input type="text" id="note-text" class="form" name="famsize" placeholder="GT3&"></input><br>
                <label for="note-text" class="form"> Parent-status </label><br>
                <input type="text" id="note-text" class="form" name="pstatus" placeholder="T&"></input><br>
                <label for="note-text" class="form"> Mother's Education </label><br>
                <input type="number" id="note-text" class="form" name="medu" placeholder="4&"></input><br>
                <label for="note-text" class="form"> Father's Education </label><br>
                <input type="number" id="note-text" class="form" name="fedu" placeholder="4&"></input><br>
                <label for="note-text" class="form"> Mother's job </label><br>
                <input type="text" id="note-text" class="form" name="mjob" placeholder="health&"></input><br>
                <label for="note-text" class="form"> Father's job </label><br>
                <input type="text" id="note-text" class="form" name ="fjob" placeholder="other&"></input><br>
                <label for="note-text" class="form"> Reason </label><br>
                <input type="text" id="note-text" class="form" name="reason"placeholder="home&"></input><br>
                <label for="note-text" class="form"> Guardian </label><br>
                <input type="text" id="note-text" class="form" name="guardian" placeholder="mother&"></input><br>
                <label for="note-text" class="form"> Travel time </label><br>
                <input type="number" id="note-text" class="form" name="traveltime" placeholder="1&"></input><br>
                <label for="note-text" class="form"> Study time </label><br>
                <input type="number" id="note-text" class="form" name="study" placeholder="1&"></input><br>
                <label for="note-text" class="form"> Failures </label><br>
                <input type="number" id="note-text" class="form" name="failures" placeholder="0&"></input><br>
                <label for="note-text" class="form"> Schoolsup </label><br>
                <input type="text" id="note-text" class="form" name="schoolsup" placeholder="no&"></input><br>
                <label for="note-text" class="form"> Famsup </label><br>
                <input type="text" id="note-text" class="form" name="famsup" placeholder="yes&"></input><br>
                <label for="note-text" class="form"> Paid </label><br>
                <input type="text" id="note-text" class="form" name="paid" placeholder="no&"></input><br>
                <label for="note-text" class="form"> Activities </label><br>
                <input type="text" id="note-text" class="form" name="activities" placeholder="no&"></input><br>
                <label for="note-text" class="form"> Nursery </label><br>
                <input type="text" id="note-text" class="form" name="nursery" placeholder="no&"></input><br>
                <label for="note-text" class="form"> Higher </label><br>
                <input type="text" id="note-text" class="form" name="higher" placeholder="yes&"></input><br>
                <label for="note-text" class="form"> Internet </label><br>
                <input type="text" id="note-text" class="form" name="internet" placeholder="yes&"></input><br>
                <label for="note-text" class="form"> Famrel </label><br>
                <input type="number" id="note-text" class="form" name="famrel" placeholder="4&"></input><br>
                <label for="note-text" class="form"> Free time </label><br>
                <input type="number" id="note-text" class="form" name="freetime" placeholder="4&"></input><br>
                <label for="note-text" class="form"> Go-out </label><br>
                <input type="number" id="note-text" class="form" name="goout" placeholder="4&"></input><br>
                <label for="note-text" class="form"> Health </label><br>
                <input type="number" id="note-text" class="form" name="health" placeholder="2&"></input><br>
                <label for="note-text" class="form"> Absences </label><br>
                <input type="number" id="note-text" class="form" name="absences" placeholder="6&"></input><br>
                <label for="note-text" class="form"> G1 </label><br>
                <input type="number" id="note-text" class="form" name="g1" placeholder="17&"></input><br>
                <label for="note-text" class="form"> G2 </label><br>
                <input type="number" id="note-text" class="form" name="g2" placeholder="17"></input><br>
                <input type="submit" value="SUBMIT" class="note-btn"> </input>
            </div>

        </form>


        <!-- <button type="button" class="btn btn-"><a href=predictionpage.php> Class Analysis</a> </button> -->
        <hr class="hr" />
        <div class="showNotes" id="notes"></div>
    </div>
</body>
</html>