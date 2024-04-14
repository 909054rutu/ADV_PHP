function disp()
{
var a=false;
if(window.XMLHttpRequest)
{
a=new XMLHttpRequest();
}
else if(window.ActiveXobject)
{
a=new ActiveXobject("Microsoft.XMLHTTP");
}

a.onreadystatechange=show;
a.open('POST','slip111.php',true);
a.setRequestHeader("content-type","application/x-www-form-urlencoded");
a.send();
function show()
{
if(a.readyState==4)
{
if(a.status==200)
{
var res=a.responseText;
document.getElementById("txt").innerHTML=res;
}
}
}
}