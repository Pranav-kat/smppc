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
                <h1>Login </h1>
            </div>
        </div>
        <div class="right"> <img src="../logo/Logo.jpg" alt="Logo not found"></div>
    </nav>


    <div class="centre">
        <div class="centre">
            <h2> VIT Students Mark Predictor </h2>
        </div>
        <form method="POST" action ="authenticate.php" class = "form">
            <div class="left wrapper">
                <label for="note-text" class = "form"> Username </label><br>
                <input type="text" id="note-text" class = "form" name="username"
                    placeholder="Enter Username"></input><br>
                <label for="note-text" class = "form"> Password </label><br>
                <input type=password id="note-text" cols="100" rows="6" name="pwd" placeholder="Enter Password"></input><br></br>
                <input type="submit" value="LOGIN" class="note-btn" >  </input>
            </div>
            <div class="right">
                <a href="">Forgot Username/Password?</a>
                <a href="signup.html">Sign Up </a>
            </div>
        </form>
    </div>
</body>

</html>