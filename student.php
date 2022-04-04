<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css" />
    <title>Classroom Scheduler</title>
</head>
<body>
<nav class="navbar">
        <div class="left">
            <div id="logo">
                <h1> Course :  </h1>
                <h1> Slot : </h1>
            </div>
        </div>
        <div class="right"> <img src="Logo.jpg" alt="Logo not found"></div>
    </nav>
<div class="wrapper">
        <h1 class="heading">Total Students : 65 </h1>
        <button class="note-btn">Class Analysis</button>

        <hr class="margin-top hr" />
        <h1 class="class">Student Cards</h1>

        <hr class="hr" />
        <div class="showNotes" id="notes"></div>
    </div>
    <script src="script.js"></script>
</body>
</html>