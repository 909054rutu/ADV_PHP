function disp()
{
var a=false;
if(window.XMLHttpRequest)
{
a=new XMLHttpRequest();
}
else if(window.ActiveXobject)
{
a=new ActiveXobject("Microsoft-XMLHTTP");
}
var s1"=t1"+document.getElementById("t1").value;
a.onreadystatechange=show;
a.open('POST','stud.php',true);
a.setRequestHeader("content-type","application/x-www-form-urlencoded");
a.send(s1);
function show()
{
if(a.readyState==4)
{
if(a.status==200)
{
var res=responseText;
document.getElementById('txt').innerHTML=res;
}
}
}
}