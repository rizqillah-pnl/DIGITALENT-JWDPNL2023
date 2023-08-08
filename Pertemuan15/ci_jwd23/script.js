search=document.getElementById("search");
content=document.getElementById("content");
search.addEventListener('keyup',function(){
    var xhr=new XMLHttpRequest();
    xhr.onreadystatechange=function(){
        if(xhr.readyState == 4 && xhr.status == 200){
             content.innerHTML=xhr.responseText;
        }
    }
    xhr.open('POST','dts/searchxml'  ,true);
    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded");
    xhr.send('keyword='+ search.value);
});

