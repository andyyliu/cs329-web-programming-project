<!DOCTYPE html>

<html lang="en">

<head>
    <title>Calendar Entry</title>
    <meta charset="UTF-8" />
    <meta name="description" content="calendar entry page" />
    <meta name="author" content="Group 37" />
    <link href="logo.jpg" rel="icon">
    <link href="calendar.css" rel="stylesheet">
    <script src="calendar.js" defer></script>
</head>

<body>
    <?php
    setcookie("page", "calendar.php");

    if (!isset($_COOKIE["login"])) {
        header("Location: login.php");
    }
    ?>
    <div id="header">
        <h1>
            <a class="title" href="index.html">
                <img id='logo' src="media/tlogo.png" alt="Wellness Tracker logo">
            </a>
            <a class="title" href="index.php">Wellness Tracker</a>
        </h1>
    </div>
    <h2>
        <a class="navbar" style="color: white" href="calendar.php">Calendar</a>
        <a class="navbar" href="discussions.php">Discussions</a>
        <a class="navbar" href="resources.php">Resources</a>
        <a class="navbar" href="contact.php">Contact Us</a>
    </h2>

    <div id="entry"></div>
    <?php
    $db = new mysqli("spring-2021.cs.utexas.edu", "cs329e_bulko_thzeng", "Issue!siege*hound", "cs329e_bulko_thzeng");
    $command = "SELECT entry FROM entries WHERE username = \"" . trim($_COOKIE["user"]) . "\" AND entry_date = \"" . trim($_GET['date']) . "\"";
    $result = $db->query($command);
    if ($result) {
        echo "<h3 style = 'margin-left: 20px;'>JOURNAL ENTRY " . trim($_GET['date']) . ": </h3>";
        $entry = "";
        while ($row = $result->fetch_row()) {
            $entry = $entry . $row[0];
        }
        echo "<div style = 'margin-left: 30px;'>" . $entry . "</div>";
    } else {
        echo "<script>alert('This isn't working');</script>";
        header("Location: calendar.php");
    }
    ?>
    <footer>
        &#169; 3/7/2021: Tina Z., Andy L., Sammy S., Kurt C.
    </footer>
</body>

</html>