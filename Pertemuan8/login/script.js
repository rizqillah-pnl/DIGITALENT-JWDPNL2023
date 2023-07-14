var search_=document.getElementById("search")
var content=document.getElementById("content")

search_.addEventListener('keyup',function(){
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
        if(xhr.readyState == 4 && xhr.status == 200){
            content.innerHTML=xhr.responseText;
        }
    }
    xhr.open('GET','search.php?search=' + search_.value ,true);
    xhr.send();
  });