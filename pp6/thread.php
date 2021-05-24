<?php


$thread = $_SERVER['QUERY_STRING'];

include "db.php";

if (isset($_POST['addComment'])) {

    $comment = $mysqli->real_escape_string($_POST['commentphp']);
    $timestamp = date('Y-m-d H:i:s');
    $user = $_COOKIE["user"];
    $command = $command = "INSERT into ThreadComments(ThreadID, date, Author, content) VALUES ('$thread', '$timestamp', '$user','$comment' )";
    $result = $mysqli->query($command);
    if (!$result) {
        die("Query failed: ($mysqli->error <br> SQL command = $command");
    }
    exit();
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <title>Forum Post</title>
    <meta charset="UTF-8" />
    <meta name="description" content="discussion section" />
    <meta name="author" content="Group 37" />
    <link href="logo.jpg" rel="icon">
    <link rel="stylesheet" href="discussions.css">
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
        <a class="navbar" style="color: white" href="discussions.php">Discussions</a>
        <a class="navbar" href="resources.php">Resources</a>
        <a class="navbar" href="contact.php">Contact Us</a>
    </h2>
    <div class="top-bar">
        <h1>
            Wellness Forum
        </h1>
    </div>
    <div class="main">
        <div class="header">
        </div>

        <form id="form" action="thread.php">
            <textarea id="commentarea" name="commentarea" type="text" placeholder="add your comment here:" required></textarea><br>
            <input type="button" value="add comment" id="addComment" />
        </form>

        <div class="comments">
        </div>


        <?php
        $command = "SELECT * FROM ThreadComments Where ThreadID = $thread";
        $result = $mysqli->query($command);
        if (!$result) {
            die("Query failed: ($mysqli->error <br> SQL command = $command");
        }

        $rows = mysqli_num_rows($result);

        echo "<ol>";

        for ($i = 0; $i < $rows; $i++) {

            $row = $result->fetch_row();
            echo "<li>";
            echo '<div class="comment">';
            echo '<div class="top-comment">';
            echo '<p class="user">' . $row[3] . '</p>';
            echo '<p class="comment-ts">';
            echo $row[2] . '</p>';
            echo '</div>';
            echo '<div class="comment-content">';
            echo $row[4];
            echo '</div>';
            echo '</div>';
            echo "</li>";
        }

        echo "<ol>";

        ?>

        <div id="results">

            <div>

                <script>
                    var id = window.location.search.slice(1)
                    $(document).ready(function() {
                        $("#addComment").on('click', function() {
                            var comment = $.trim($("#commentarea").val());
                            $.ajax({
                                url: 'thread.php?' + id,
                                method: 'POST',
                                data: {
                                    addComment: 1,
                                    commentphp: comment
                                },
                                success: function(response) {
                                    window.location = "thread.php?" + id;
                                },
                                dataType: 'text'
                            });


                        });
                    });
                </script>

            </div>

            <style>
                a {
                    text-decoration: none;
                    color: black;
                }

                h1,
                h4,
                ol {
                    margin: 0;
                }

                p {
                    margin: 5px 0;
                }

                textarea {
                    width: 80%;
                    height: 80px;
                }

                button {
                    display: block;
                    margin: 10px 0;
                }

                .main {
                    background-color: #F6F6EF;
                    padding: 10px 40px;
                }

                .comments {
                    margin: 40px 0;
                }

                .comment {
                    margin: 10px 0;
                }

                .row {
                    padding: 5px 0;
                }

                .bottom,
                .top-comment {
                    display: flex;
                    color: grey;
                    font-size: 12px;
                }

                .timestamp {
                    padding-right: 10px;
                }

                .comment-ts {
                    padding-left: 10px;
                }
            </style>

            <?php
            setcookie("page", "discussions.php");

            if (!isset($_COOKIE["login"])) {
                header('location:login.php');
            }
            ?>
            <footer>
                &#169; 4/30/2021: Tina Z., Andy L., Sammy S., Kurt C.
            </footer>

            <?php
            setcookie("page", "discussions.php");

            if (!isset($_COOKIE["login"])) {
                header('location:login.php');
            }
            ?>


</body>

</html>