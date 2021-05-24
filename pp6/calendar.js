var dates = document.getElementsByClassName("open-button");
for (var i = 0; i < dates.length; i++) {
    var id = dates[i].id;
    var md = id.split("-");
    var d = new Date();
    if (!((d.getMonth() + 1 > md[0]) || (d.getMonth() + 1 == md[0] && d.getDate() >= md[1]))) {
        i--;
        document.getElementById(id).className = "diff-month";
    }
}

function openForm(month, date) {
    var d = new Date();
    if (d.getMonth() + 1 == month && d.getDate() == date) {
        document.getElementById("myForm").style.display = "block";
        document.getElementById("entry").placeholder = month + "/" + date;
        document.getElementById("date").value = date;
        document.getElementById("mo").value = month;
    } else if (d.getMonth() >= month || (d.getMonth() + 1 == month && d.getDate() > date)) {
        window.location.href = "entry.php?date=2021-" + String(month).padStart(2, '0') + "-" + String(date).padStart(2, '0');
    }
}

function closeForm() {
    document.getElementById("myForm").style.display = "none";
}