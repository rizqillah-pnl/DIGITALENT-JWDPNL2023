var search_ = document.getElementById("search")
var content = document.getElementById("content")

search_.addEventListener('keyup', function () {
    var xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            content.innerHTML = xhr.responseText;
        }
    }
    xhr.open('GET', 'search.php?search=' + search_.value, true);
    xhr.send();
});
function editxml(isi, id, klm) {

    td = document.getElementById("td" + klm + "[" + id + "]");
    td.innerHTML = "<input type='text' value='" + isi + "' onblur='simpanxml(" + klm + "," + id + ")' id='inputtext'>";
    document.getElementById("inputtext").focus();
}
function simpanxml(klm, id) {
    td = document.getElementById("td" + klm + "[" + id + "]");
    var xhr = new XMLHttpRequest();
    isi = document.getElementById('inputtext').value;
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            td.innerHTML = xhr.responseText;
        }
    }
    xhr.open('GET', 'editxml.php?id=' + id + '&klm=' + klm + ',&isi=' + isi, true);

    xhr.send();

}