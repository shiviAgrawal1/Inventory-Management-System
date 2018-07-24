 function showNo()
{
    var No=document.getElementById('No').value;
    var xhttp=new XMLHttpRequest();
    xhttp.onreadystatechange=function()
    {
        if(this.readyState==4 && this.status==200)
        {
            document.getElementById("list").innerHTML=this.responseText;
        }
    };
    xhttp.open("GET","/showNo?No="+No,true);
    xhttp.send();
}

 
 