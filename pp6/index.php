<!DOCTYPE html>

<html lang="en">

<head>
    <title>Home Page</title>
    <meta charset="UTF-8" />
    <meta name="description" content="home page" />
    <meta name="author" content="Group 37" />
    <link href="logo.jpg" rel="icon">
    <link href="index.css" rel="stylesheet">
</head>

<body>
    <div id="header">
        <h1>
            <img id='logo' src="media/tlogo.png" alt="Wellness Tracker logo">
            Wellness Tracker
        </h1>
    </div>

    <h2>
        <a class="navbar" href="calendar.php">Calendar</a>
        <a class="navbar" href="discussions.php">Discussions</a>
        <a class="navbar" href="resources.php">Resources</a>
        <a class="navbar" href="contact.php">Contact Us</a>
    </h2>

    <p id="about">
        Wellness Tracker creates a space where you can take time to reflect
        on your wellbeing and have access to resources for your everyday wellness needs.
    </p>

    <div id="title">
        Our Newest Videos
    </div>
    <video controls>
        <source src="media/journaling.mp4" type="video/mp4">
    </video>

    <footer>
        &#169; 4/30/2021: Tina Z., Andy L., Sammy S., Kurt C.
    </footer>

    <?php
    setcookie("page", "index.php");
    ?>

</body>

</html>