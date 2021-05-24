<!DOCTYPE html>

<html lang="en">

<head>
    <title>Resources</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Page that contains resources" />
    <meta name="author" content="Group 37" />
    <link href="logo.jpg" rel="icon">
    <link href="resources.css" rel="stylesheet">
</head>

<body>
    <span id="header">
        <h1>
            <a id="title" href="index.php">
                <img id='logo' src="media/tlogo.png" alt="Wellness Tracker logo">
            </a>
            <a id="title" href="index.php">Wellness Tracker</a>
        </h1>
    </span>
    <h2>
        <a class="navbar" href="calendar.php">Calendar</a>
        <a class="navbar" href="discussions.php">Discussions</a>
        <a class="navbar" style="color: white" href="resources.php">Resources</a>
        <a class="navbar" href="contact.php">Contact Us</a>
    </h2>
    <span id="images">
        <img id='meditation' src="media/meditation.jpg" alt="meditation picture" onclick="window.location.href = 'meditation.html'">
        <img id='yoga' src="media/yoga.jpeg" alt="yoga picture" onclick="window.location.href = 'yoga.html'">
        <div id='meditation-cover'>Meditation</div>
        <div id='yoga-cover'>Yoga</div>
    </span>
    <footer>
        &#169 4/30/2021: Tina Z., Andy L., Sammy S., Kurt C.
    </footer>
    <?php
    setcookie("page", "resources.php");

    if (!isset($_COOKIE["login"])) {
        header('location:login.php');
    }
    ?>
</body>

</html>