var dataBarang=["Buku","Pinsil","penggaris"];

function showBarang(){
    var listBarang=document.getElementById("list-barang");
    listBarang.innerHTML="";

    for(i=0;i<dataBarang.length;i++){
        var btnEdit="<a href='#' onclick='editBarang("+i+")'>Edit</a>";
        var btnHapus="<a href='#' onclick='hapusBarang("+i+")'>Hapus</a>";
        listBarang.innerHTML+="<li>"+dataBarang[i]+" ["+btnEdit+"]["+ btnHapus+"]</li>";
    }
}
function addBarang(){
    var input=document.querySelector("input[name=barang]");
    dataBarang.push(input.value);
    showBarang();
    input.value="";
    input.focus();
}
function editBarang(a){
    var newBarang=prompt("Nama baru",dataBarang[a]);
    dataBarang[a]=newBarang;
    showBarang();
}
function hapusBarang(a){
    dataBarang.splice(a,1);
    showBarang();
}
showBarang();