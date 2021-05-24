<!DOCTYPE html>

<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Page with contact information and feedback form" />
    <meta name="author" content="Group 37" />
    <link href="logo.jpg" rel="icon">
    <link href="contact.css" rel="stylesheet">
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
    <h2 id="nav">
        <a class="navbar" href="calendar.php">Calendar</a>
        <a class="navbar" href="discussions.php">Discussions</a>
        <a class="navbar" href="resources.php">Resources</a>
        <a class="navbar" style="color: white" href="contact.php">Contact Us</a>
    </h2>

    <div id="left">
        <div>
            <img class="headshot" src="media/tina.jpg" alt="Tina">
            <div class="description">
                Tina is a junior at UT Austin majoring in Marketing. She is also pursuing the Elements of
                Computing certificate and the Media and Entertainment Industries minor.
            </div>
        </div>

        <div style="clear: left;">
            <img class="headshot" src="media/kurt.png" alt="Kurt">
            <div class="description">
                Kurt is a junior at UT Austin majoring in Math -- Actuarial Studies. He is also pursuing the
                Elements of Computing Certificate.
            </div>
        </div>

        <div style="clear: left;">
            <img class="headshot" src="media/andy.jpg" alt="Andy">
            <div class="description">
                Andy is a sophomore at UT Austin majoring in MIS. He is also purusing the Elements of Computing
                and Applied Statstical Modeling certificates and an Economics minor.
            </div>
        </div>

        <div style="clear: left;">
            <img class="headshot" src="media/sammy.jpeg" alt="Sammy">
            <div class="description">
                Sammy is a senior at UT Austin majoring in HDO. He is also purusing the Business Foundations and
                Elements of Computing cetificates.
            </div>
        </div>
    </div>

    <div id="right">
        <p id="concerns">Please send us any comments or concerns!</p>
        <form id="form" method="POST" action="contact.php">
            <table>
                <tr>
                    <td>Name:</td>
                </tr>
                <tr>
                    <td>
                        <input id="name" name="name" type="text" placeholder="Enter your name here (optional):" />
                    </td>
                </tr>
                <tr>
                    <td>Email:</td>
                </tr>
                <tr>
                    <td>
                        <input id="email" name="email" type="text" placeholder="Enter your email here (optional):" />
                    </td>
                </tr>
                <tr>
                    <td>Comments:</td>
                </tr>
                <tr>
                    <td>
                        <textarea id="comments" name="comments" rows="20" cols="38" placeholder="Enter your comments here:" required></textarea>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="Send" />
                        <input type="reset" value="Clear" />
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <footer>
        &#169; 4/30/2021: Tina Z., Andy L., Sammy S., Kurt C.
    </footer>
    <?php
    setcookie("page", "contact.php");

    if (!isset($_COOKIE["login"])) {
        header('location:login.php');
    }

    // Obtain information from form submission
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $comments = trim($_POST["comments"]);

    //Write information to text file
    $wfile = fopen("feedback.txt", "a");
    fwrite($wfile, $name . ";" . $email . ";" . $comments . "\n");
    fclose($wfile);

    //Alert user that information has been sent
    if ($comments != "") {
        echo '<script type="text/javascript">';
        echo 'alert("Thank you for your feedback!")';
        echo '</script>';
    }
    ?>
</body>

</html>