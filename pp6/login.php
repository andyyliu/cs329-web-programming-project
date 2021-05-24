<!DOCTYPE html>

<html lang="en">

<head>
    <title>Login</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Login page" />
    <meta name="author" content="Group 37" />
    <link href="logo.jpg" rel="icon">
    <link href="login.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>

<body>
    <div id="header">
        <h1>
            <a class="title" href="index.php">
                <img id='logo' src="media/tlogo.png" alt="Wellness Tracker logo">
            </a>
            <a class="title" href="index.php">Wellness Tracker</a>
        </h1>
    </div>
    <h2>
        <a class="navbar" href="calendar.php">Calendar</a>
        <a class="navbar" href="discussions.php">Discussions</a>
        <a class="navbar" href="resources.php">Resources</a>
        <a class="navbar" href="contact.php">Contact Us</a>
        <a class="login" style="color: white" href="login.php"> Login</a>
    </h2>
    <div id="loginTitle">
        <p>Login</p>
    </div>
    <form id="form" action="login.php" method="POST">
        <table>
            <tr>
                <td>Username:</td>
                <td>
                    <input id="username" name="username" type="text" placeholder="Enter your username here:" required />
                </td>
            </tr>
            <tr>
                <td>Password:</td>
                <td>
                    <input id="password" name="password" type="password" placeholder="Enter your password here:" required />
                </td>
            </tr>
            <tr>
                <td></td>
                <td id="question">
                    Don't have an account? <a href="register.php">Sign Up</a>
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="Login" />
                    <input type="reset" value="Clear" />
                </td>
            </tr>
        </table>
    </form>
    <footer>
        &#169; 4/30/2021: Tina Z., Andy L., Sammy S., Kurt C.
    </footer>
    <?php
    // Retrieve data from form submit
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

    //MySQL Login Information
    $dbuser = "cs329e_bulko_andyliu1";
    $dbpass = "Apathy2treble3Hardly";
    $dbserver = "spring-2021.cs.utexas.edu";
    $dbname = "cs329e_bulko_andyliu1";


    if ($username != '' || $password != '') {
        //Create MySQL object
        $mysqli = new mysqli($dbserver, $dbuser, $dbpass, $dbname);
        if ($mysqli->connect_errno) {
            header('location:login.php');
            die('Connect Error: ' . $mysqli->connect_errno . ": " .  $mysqli->connect_error);
        }

        //Select Database
        $mysqli->select_db($dbname) or die($mysqli->error);

        // Escape User Input to help prevent SQL Injection
        $username = $mysqli->real_escape_string($username);
        $password = $mysqli->real_escape_string($password);

        //build and execute query
        $query = "SELECT username, password FROM login WHERE username = '$username' AND password = '$password'";
        $result = $mysqli->query($query) or die($mysqli->error);

        //Allow login if username and password exist
        if ($result->fetch_array(MYSQLI_ASSOC)) {
            //Set state to logged in
            setcookie("user", $username);
            setcookie("login", true, time() + 3600); //Cookie expires after 1 hour
            header('location:' . $_COOKIE["page"]);
        } else {
            echo '<script>';
            echo 'alert("The username and password are incorrect.")';
            echo '</script>';
        }
    }
    ?>
</body>

</html>