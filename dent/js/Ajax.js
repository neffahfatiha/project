function Print() {
    const r = new XMLHttpRequest();
    const result = document.getElementById('result');

    r.onreadystatechange = function() {
        if (r.readyState === 4 && r.status === 200) {
            result.innerHTML = r.responseText;
        }
    };

    r.open("GET", "../js/test.txt", true);
    r.send();
}