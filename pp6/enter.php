<?php
if (isset($_POST["view"])) {
    header("Location: entry.php?date=2021-" . str_pad($_POST['month'], 2, "0", STR_PAD_LEFT) . "-" . str_pad($_POST['date'], 2, "0", STR_PAD_LEFT));
}
if (isset($_POST["submit"]) && isset($_COOKIE['user'])) {
    $db = new mysqli("spring-2021.cs.utexas.edu", "cs329e_bulko_thzeng", "Issue!siege*hound", "cs329e_bulko_thzeng");
    $command = "INSERT INTO entries (username, entry_date, entry) VALUES (\"" . $_COOKIE['user'] . "\", \"2021-" . str_pad($_POST['month'], 2, "0", STR_PAD_LEFT) . "-" . str_pad($_POST['date'], 2, "0", STR_PAD_LEFT) . "\", \"" . $_POST['entry'] . "<br><br>" .  "\")";
    $result = $db->query($command);
    if ($result) {
        echo "<script>alert('Thank you for your entry.'); window.location.href = 'calendar.php';</script>";
    } else {
        echo "<script>alert('Sorry, there was an error')</script>";
    }
}
