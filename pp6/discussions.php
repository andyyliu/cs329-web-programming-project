<!DOCTYPE html>

<html lang="en">

<head>
    <title>Discussion</title>
    <meta charset="UTF-8" />
    <meta name="description" content="Page that contains discussion forums" />
    <meta name="author" content="Group 37" />
    <link href="logo.jpg" rel="icon">
    <link rel="stylesheet" href="discussions.css">
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
        <a class="navbar" style="color: white" href="discussions.php">Discussions</a>
        <a class="navbar" href="resources.php">Resources</a>
        <a class="navbar" href="contact.php">Contact Us</a>
    </h2>

    <div class="top-bar">
        <h1 id="subtitle">
            Wellness Forum
        </h1>
    </div>
    <div class="main">



        <?php
        include "db.php";


        $command = "SELECT * FROM Threads";
        $result = $mysqli->query($command);
        if (!$result) {
            die("Query failed: ($mysqli->error <br> SQL command = $command");
        }

        $rows = mysqli_num_rows($result);

        echo "<ol>";

        for ($i = 0; $i < $rows; $i++) {

            $row = $result->fetch_row();

            echo "<li class='row'>";

            echo "<a href='thread.php?$row[0]'>";

            echo "<h4 class='title'>" . $row[1] . "</h4>";

            echo "<div class='bottom'>";
            echo "<p class='timestamp'>" . $row[3] . "</p>";

            echo "</div>";
            echo "</a>";
            echo "</li>";
        }

        echo "</ol>";

        ?>
    </div>
    <!--
<style type="text/css">
<?php include 'discussions.css'; ?>
</style>

    <script src="data.js"></script> 
    <script>
        console.log(threads);
        var container = document.querySelector('ol');
        for (let thread of threads) {
            var html = `
            <li class="row">
                <a href="thread.php?${thread.id}">
                    <h4 class="title">
                        ${thread.title}
                    </h4>
                    <div class="bottom">
                        <p class="timestamp">
                            ${new Date(thread.date).toLocaleString()}
                        </p>
                        <p class="comment-count">
                            ${thread.comments.length} comments
                        </p>
                    </div>
                </a>
            </li>
            `
            container.insertAdjacentHTML('beforeend', html);
        }
    </script>
-->
    <footer>
        &#169 4/27/2021: Tina Z., Andy L., Sammy S., Kurt C.
    </footer>

    <?php
    setcookie("page", "discussions.php");

    if (!isset($_COOKIE["login"])) {
        header('location:login.php');
    }
    ?>

</body>

</html>