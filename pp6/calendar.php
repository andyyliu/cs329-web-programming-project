<!DOCTYPE html>

<html lang="en">

<head>
    <title>Contact Us</title>
    <meta charset="UTF-8" />
    <meta name="description" content="contact us page" />
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
            <a class="title" href="index.php">
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

    <h1 id="month">May 2021</h1>

    <div id="container">
        <table cellspacing="0">
            <tr>
                <td class="day">Sunday</td>
                <td class="day">Monday</td>
                <td class="day">Tuesday</td>
                <td class="day">Wednesday</td>
                <td class="day">Thursday</td>
                <td class="day">Friday</td>
                <td class="day">Saturday</td>
            </tr>

            <tr>
                <td class="cell"><button class="open-button" id="4-25" onclick="openForm(4, 25)">25</button></td>
                <td class="cell"><button class="open-button" id="4-26" onclick="openForm(4, 26)">26</button></td>
                <td class="cell"><button class="open-button" id="4-27" onclick="openForm(4, 27)">27</button></td>
                <td class="cell"><button class="open-button" id="4-28" onclick="openForm(4, 28)">28</button></td>
                <td class="cell"><button class="open-button" id="4-29" onclick="openForm(4, 29)">29</button></td>
                <td class="cell"><button class="open-button" id="4-30" onclick="openForm(4, 30)">30</button></td>
                <td class="cell"><button class="open-button" id="5-1" onclick="openForm(5, 1)">1</button></td>
            </tr>

            <tr>
                <td class="cell"><button class="open-button" id="5-2" onclick="openForm(5, 2)">2</button></td>
                <td class="cell"><button class="open-button" id="5-3" onclick="openForm(5, 3)">3</button></td>
                <td class="cell"><button class="open-button" id="5-4" onclick="openForm(5, 4)">4</button></td>
                <td class="cell"><button class="open-button" id="5-5" onclick="openForm(5, 5)">5</button></td>
                <td class="cell"><button class="open-button" id="5-6" onclick="openForm(5, 6)">6</button></td>
                <td class="cell"><button class="open-button" id="5-7" onclick="openForm(5, 7)">7</button></td>
                <td class="cell"><button class="open-button" id="5-8" onclick="openForm(5, 8)">8</button></td>

            </tr>

            <tr>
                <td class="cell"><button class="open-button" id="5-9" onclick="openForm(5, 9)">9</button></td>
                <td class="cell"><button class="open-button" id="5-10" onclick="openForm(5, 10)">10</button></td>
                <td class="cell"><button class="open-button" id="5-11" onclick="openForm(5, 11)">11</button></td>
                <td class="cell"><button class="open-button" id="5-12" onclick="openForm(5, 12)">12</button></td>
                <td class="cell"><button class="open-button" id="5-13" onclick="openForm(5, 13)">13</button></td>
                <td class="cell"><button class="open-button" id="5-14" onclick="openForm(5, 14)">14</button></td>
                <td class="cell"><button class="open-button" id="5-15" onclick="openForm(5, 15)">15</button></td>
            </tr>

            <tr>
                <td class="cell"><button class="open-button" id="5-16" onclick="openForm(5, 16)">16</button></td>
                <td class="cell"><button class="open-button" id="5-17" onclick="openForm(5, 17)">17</button></td>
                <td class="cell"><button class="open-button" id="5-18" onclick="openForm(5, 18)">18</button></td>
                <td class="cell"><button class="open-button" id="5-19" onclick="openForm(5, 19)">19</button></td>
                <td class="cell"><button class="open-button" id="5-20" onclick="openForm(5, 20)">20</button></td>
                <td class="cell"><button class="open-button" id="5-21" onclick="openForm(5, 21)">21</button></td>
                <td class="cell"><button class="open-button" id="5-22" onclick="openForm(5, 22)">22</button></td>
            </tr>

            <tr>
                <td class="cell"><button class="open-button" id="5-23" onclick="openForm(5, 23)">23</button></td>
                <td class="cell"><button class="open-button" id="5-24" onclick="openForm(5, 24)">24</button></td>
                <td class="cell"><button class="open-button" id="5-25" onclick="openForm(5, 25)">25</button></td>
                <td class="cell"><button class="open-button" id="5-26" onclick="openForm(5, 26)">26</button></td>
                <td class="cell"><button class="open-button" id="5-27" onclick="openForm(5, 27)">27</button></td>
                <td class="cell"><button class="open-button" id="5-28" onclick="openForm(5, 28)">28</button></td>
                <td class="cell"><button class="open-button" id="5-29" onclick="openForm(5, 29)">29</button></td>
            </tr>

            <tr>
                <td class="cell"><button class="open-button" id="5-30" onclick="openForm(5, 30)">30</button></td>
                <td class="cell"><button class="open-button" id="5-31" onclick="openForm(5, 31)">31</button></td>
                <td class="cell"><button class="open-button" id="6-1" onclick="openForm(6, 1)">1</button></td>
                <td class="cell"><button class="open-button" id="6-2" onclick="openForm(6, 2)">2</button></td>
                <td class="cell"><button class="open-button" id="6-3" onclick="openForm(6, 3)">3</button></td>
                <td class="cell"><button class="open-button" id="6-4" onclick="openForm(6, 4)">4</button></td>
                <td class="cell"><button class="open-button" id="6-5" onclick="openForm(6, 5)">5</button></td>
            </tr>
        </table>
    </div>

    <div class="form-popup" id="myForm">
        <form method="POST" action="enter.php" class="form-container">
            <h1>Journal Entry</h1>
            <textarea name="entry" id="entry" rows="15" cols="35" placeholder="Journal Entry"></textarea>
            <button type="submit" class="btn" name="view">View Entries</button>
            <button type="submit" class="btn" name="submit">Submit</button>
            <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
            <input type="hidden" id="date" name="date">

            <input type="hidden" id="mo" name="month">
        </form>
    </div>
    <footer>
        &#169; 3/7/2021: Tina Z., Andy L., Sammy S., Kurt C.
    </footer>
</body>

</html>