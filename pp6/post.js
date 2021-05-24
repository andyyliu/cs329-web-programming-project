function reply(current, num) {
    let reply = document.getElementById(num).value;
    document.getElementById(current).innerHTML = reply;
}