<html>
<title>Connection</title>

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

        <?php 
        $servername = "localhost";
        $username = "root";
        $password = "";
        $conn = mysqli_connect($servername,$username,$password,'smppc');
        if(!$conn){
             die("Connection failed: ".mysqli_connect_error());
        }
        ?>
    </div>
</body>
</html>